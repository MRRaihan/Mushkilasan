<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public $data;
  private $api_key = "6b098bf9679bfcaf632dadd0c08c8019-161ac1f0-3b79-49bd-a560-9f17b8736528";
  public $app_id = "22C3092294614A0783B922D0A03B6A90";
  public $message_id = "F7AB5180AFAEE91BF95B0FCCA3D516FF";

  public function __construct()
  {

    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'user';
    $this->data['module'] = 'login';
    $this->data['page'] = '';
    $this->data['base_url'] = base_url();
    $this->load->helper('user_timezone_helper');
    $this->load->model('user_login_model', 'user_login');
    $this->load->model('admin_model', 'admin');
    $this->load->model('templates_model');
    $this->load->library('session');
    $this->load->library('PHPRequests');

    $default_language_select = default_language();

    if ($this->session->userdata('user_select_language') == '') {
      $this->data['user_selected'] = $default_language_select['language_value'];
    } else {
      $this->data['user_selected'] = $this->session->userdata('user_select_language');
    }

    $this->data['active_language'] = $active_lang = active_language();

    $lg = custom_language($this->data['user_selected']);

    $this->data['default_language'] = $lg['default_lang'];

    $this->data['user_language'] = $lg['user_lang'];

    $this->user_selected = (!empty($this->data['user_selected'])) ? $this->data['user_selected'] : 'en';

    $this->default_language = (!empty($this->data['default_language'])) ? $this->data['default_language'] : '';

    $this->user_language = (!empty($this->data['user_language'])) ? $this->data['user_language'] : '';

  }


  public function index()
  {
    $this->data['page'] = 'index';
    $this->load->vars($this->data);
    $this->load->view($this->data['theme'] . '/template');
  }

  public function registration()
  {

    $this->data['page'] = 'add_service';
    $this->load->vars($this->data);
    $this->load->view($this->data['theme'] . '/template');
  }

  public function login()
  {
    $mobile = $this->input->post('mobile');
    $countryCode = $this->input->post('country_code');
    $is_available_mobile = $this->user_login->check_mobile_no($mobile);
    $is_available_mobileuser = $this->user_login->check_user_mobileno($mobile);
    $user_details = $this->user_login->get_user_details($mobile);
    $provider_details = $this->user_login->get_provider_details($mobile);
    if ($is_available_mobile == 1 && $is_available_mobileuser == 0) {
      $session_data = array(
        'id' => $provider_details['id'],
        'chat_token' => $provider_details['token'],
        'name' => $this->input->post('userName'),
        'email' => $this->input->post('userEmail'),
        'mobileno' => $mobile,
        'usertype' => 'provider'
      );
      $this->session->set_userdata($session_data);
      echo 1;

    } elseif ($is_available_mobile == 0 && $is_available_mobileuser == 1) {
      $session_data = array(
        'id' => $user_details['id'],
        'chat_token' => $user_details['token'],
        'name' => $this->input->post('userName'),
        'email' => $this->input->post('userEmail'),
        'mobileno' => $mobile,
        'usertype' => 'user'
      );

      $this->session->set_userdata($session_data);
      echo 2;
    } else {
      $this->session->set_flashdata('error_message', 'Wrong login credentials.');
      echo 3;
    }

  }

  public function insert_user()
  {
    $mobile = $this->input->post('mobile');
    $email = $this->input->post('email');
    $name = $this->input->post('username');

    $ShareCode = $this->user_login->ShareCode(6);

    // print_r($ShareCode);exit;


    $user_details['mobileno'] = $this->input->post('mobile');
    $user_details['email'] = $this->input->post('email');
    $user_details['name'] = $this->input->post('username');
    $user_details['country_code'] = $this->input->post('country_code');

    $is_available = $this->user_login->check_user_emailid($email);
    $is_available_mobileno = $this->user_login->check_user_mobileno($mobile);
    $is_available_provider = $this->user_login->check_provider_email($email);
    $is_available_mobile_provider = $this->user_login->check_mobile_no($mobile);


    if ($is_available == 0 && $is_available_mobileno == 0 && $is_available_provider == 0 && $is_available_mobile_provider == 0) {
      $result = $this->user_login->user_signup($user_details);

      echo 1;

    } else {
      $this->session->set_flashdata('error_message', 'Something Went wrong.');
      echo 2;
    }

  }

  public function logout()
  {

    if ($this->session->userdata('usertype') == "provider") {
      $login_details = array(
        'last_logout' => date('Y-m-d H:i:s'),
        'is_online' => 2
      );
      $this->db->where('id', $this->session->userdata('id'))->update('providers', $login_details);
    }
    $this->session->sess_destroy();
    redirect(base_url());
  }

  public function user_dashboard()
  {
    $this->data['page'] = 'user_dashboard';
    $this->load->vars($this->data);
    $this->load->view($this->data['theme'] . '/template');
  }

  public function get_category()
  {
    $this->db->where('status', 1);
    $query = $this->db->get('categories');
    $result = $query->result();
    $data = array();
    foreach ($result as $r) {
      $data['value'] = $r->id;
      $data['label'] = $r->category_name;
      $json[] = $data;
    }
    echo json_encode($json);
  }

  public function email_chk()
  {
    $user_data = $this->input->post();
    $input['email'] = $user_data['userEmail'];
    $is_available = $this->user_login->otp_check_email($input);
    $is_available_user = $this->user_login->otp_check_uemail($input);
    if ($is_available > 0 || $is_available_user > 0) {
      $isAvailable = FALSE;
    } else {
      $isAvailable = TRUE;
    }
    echo json_encode(
      array(
        'valid' => $isAvailable
      ));
  }

  public function email_chk_user()
  {
    $user_data = $this->input->post();

    $input['email'] = $user_data['userEmail'];
    $is_available = $this->user_login->otp_check_uemail($input);
    $is_available_provider = $this->user_login->otp_check_email($input);
    if ($is_available > 0 || $is_available_provider > 0) {
      $isAvailable = FALSE;
    } else {
      $isAvailable = TRUE;
    }
    echo json_encode(
      array(
        'valid' => $isAvailable
      ));
  }

  public function mobileno_chk()
  {
    $user_data = $this->input->post();

    if ($user_data['checked'] == 0) {
      $input['mobileno'] = $user_data['userMobile'];
      $input['countryCode'] = $user_data['countryCode'];
      $is_available_mobile = $this->user_login->check_mobile_no($input);
      $is_available_mobileuser = $this->user_login->check_user_mobileno($input);

      if ($is_available_mobile > 0 || $is_available_mobileuser > 0) {
        $isAvailable = FALSE;
      } else {
        $isAvailable = TRUE;
      }
      echo json_encode(
        array(
          'valid' => $isAvailable
        ));
    } elseif ($user_data['checked'] == 1) {
      $input['mobileno'] = $user_data['userMobile'];
      $input['countryCode'] = $user_data['countryCode'];
      $is_available_mobile = $this->user_login->check_mobile_no($input);

      if ($is_available_mobile > 0) {
        $isAvailable = TRUE;
      } else {
        $isAvailable = FALSE;
      }
      echo json_encode(
        array(
          'valid' => $isAvailable
        ));
    }
  }

  public function check_mobile_existing()
  {
    $user_data = $this->input->post();
    $input['mobileno'] = $user_data['userMobile'];
    $input['countryCode'] = $user_data['countryCode'];

    if ($user_data['userMobile']) {
      $is_available_mobile = $this->user_login->check_mobile_no($input);
      if ($is_available_mobile > 0) {
        $isAvailable = 1;
        $mode = 1;
      } else {
        $is_available_mobileuser = $this->user_login->check_user_mobileno($input);
        if ($is_available_mobileuser > 0) {
          $isAvailable = 1;
          $mode = 2;
        } else {
          $isAvailable = 2;
          $mode = 2;
        }
      }
      echo json_encode(
        [
          'data' => $isAvailable,
          'mode' => $mode
        ]);

    }
  }

  public function chkmailexist()
  {
    $user_data = $this->input->post(); //echo "<pre>";print_r($input);exit;
    $input['email'] = $user_data['userEmail'];

    if ($user_data['userEmail']) {
      $is_available_mobile = $this->user_login->check_emailid($input);
      if ($is_available_mobile > 0) {
        $isAvailable = 1;
        $mode = 1;
      } else {
        $is_available_mobileuser = $this->user_login->check_user_emailidlogin($input);
        if ($is_available_mobileuser > 0) {
          $isAvailable = 1;
          $mode = 2;
        } else {
          $isAvailable = 2;
          $mode = 2;
        }
      }
      echo json_encode(
        [
          'data' => $isAvailable,
          'mode' => $mode
        ]);

    }
  }

  public function mobileno_chk_user()
  {
    $user_data = $this->input->post();

    if ($user_data['checked'] == 0) {
      $input['mobileno'] = $user_data['userMobile'];
      $input['countryCode'] = $user_data['countryCode'];
      $is_available_mobile = $this->user_login->check_mobile_no($input);
      $is_available_mobileuser = $this->user_login->check_user_mobileno($input);

      if ($is_available_mobile > 0 || $is_available_mobileuser > 0) {
        $isAvailable = FALSE;
      } else {
        $isAvailable = TRUE;
      }
      echo json_encode(
        array(
          'valid' => $isAvailable
        ));
    } elseif ($user_data['checked'] == 1) {
      $input['mobileno'] = $user_data['userMobile'];
      $input['countryCode'] = $user_data['countryCode'];
      $is_available_mobileuser = $this->user_login->check_user_mobileno($input);

      if ($is_available_mobileuser > 0) {
        $isAvailable = TRUE;
      } else {
        $isAvailable = FALSE;
      }
      echo json_encode(
        array(
          'valid' => $isAvailable
        ));
    }
  }

  /*resend otp*/
  public function re_send_otp_user()
  {
    extract($_POST);

    $user_type = $this->user_login->get_user_type($mobile_no, $country_code);

    $default_otp = settingValue('default_otp');
    if ($default_otp == 1) {
      $otp = '1234';
    } else {
      $otp = rand(1000, 9999);
    }


    $message = 'This is Your Login OTP  ' . $otp . '';
    $user_data['otp'] = $otp;


    error_reporting(0);
    $key = settingValue('sms_key');
    $secret_key = settingValue('sms_secret_key');
    $sender_id = settingValue('sms_sender_id');
    require_once('vendor/nexmo/src/NexmoMessage.php');
    $nexmo_sms = new NexmoMessage($key, $secret_key);
    $result = $nexmo_sms->sendText($country_code . $mobile_no, $sender_id, $message);
    $this->session->set_tempdata('otp', '$user_data', 300);

    $otp_data = array(
      'endtime' => time() + 300,
      'mobile_number' => $mobile_no,
      'country_code' => $country_code,
      'otp' => $otp,
      'created_at' => date('Y-m-d H:i:s')
    );


    /*check OTP*/

    $check_otp_table = $this->user_login->isset_mobile_otp($mobile_no, $country_code, $otp_data);

    echo $check_otp_table;

    /*find mobile user type*/

  }

  /*resend otp*/
  public function re_send_otp_provider()
  {
    extract($_POST);

    $user_type = $this->user_login->get_user_type($mobile_no, $country_code);

    $default_otp = settingValue('default_otp');
    if ($default_otp == 1) {
      $otp = '1234';
    } else {
      $otp = rand(1000, 9999);
    }


    $message = 'This is Your Login OTP  ' . $otp . '';
    $user_data['otp'] = $otp;


    error_reporting(0);
    $key = settingValue('sms_key');
    $secret_key = settingValue('sms_secret_key');
    $sender_id = settingValue('sms_sender_id');
    require_once('vendor/nexmo/src/NexmoMessage.php');
    $nexmo_sms = new NexmoMessage($key, $secret_key);
    $result = $nexmo_sms->sendText($country_code . $mobile_no, $sender_id, $message);
    $this->session->set_tempdata('otp', '$user_data', 300);

    $otp_data = array(
      'endtime' => time() + 300,
      'mobile_number' => $mobile_no,
      'country_code' => $country_code,
      'otp' => $otp,
      'created_at' => date('Y-m-d H:i:s'),
    );


    /*check OTP*/

    $check_otp_table = $this->user_login->isset_mobile_otp($mobile_no, $country_code, $otp_data);


    echo $check_otp_table;


  }

  public function send_otp_request()
  {


    $user_data = $this->input->post();

    $query = $this->db->query("select * from system_settings WHERE status = 1");
    $sresult = $query->result_array();
    $login_type = '';
    $otp_by = '';
    foreach ($sresult as $res) {
      if ($res['key'] == 'login_type') {
        $login_type = $res['value'];
      }
      if ($res['key'] == 'otp_by') {
        $otp_by = $res['value'];
      }
    }
    if (!empty($user_data['mobileno']) && !empty($user_data['email'])) {
      $is_available = $this->user_login->otp_check_email($user_data);

      $is_available_mobile = $this->user_login->otp_check_mobile_no($user_data);

      if ($is_available == 0) {
        if ($is_available_mobile == 0) {

          $default_otp = settingValue('default_otp');
          if ($default_otp == 1) {
            $otp = '1234';
          } else {
            $otp = rand(1000, 9999);
          }


          $message = 'This is Your Login OTP  ' . $otp . '';
          $user_data['otp'] = $otp;

          error_reporting(0);

          if ($login_type == 'mobile' && $otp_by == 'email') {

            $body = 'Hi ' . $user_data["username"] . ',<br> ' . $message;
            $phpmail_config = settingValue('mail_config');
            if (isset($phpmail_config) && !empty($phpmail_config)) {
              if ($phpmail_config == "phpmail") {
                $from_email = settingValue('email_address');
              } else {
                $from_email = settingValue('smtp_email_address');
              }
            }

            $this->load->library('email');
            if (!empty($from_email) && isset($from_email)) {
              $mail = $this->email
                ->from($from_email)
                ->to($user_data["email"])
                ->subject('Provider Registration')
                ->message($body)
                ->send();
              //print_r($mail);exit;
            }

            $msg = 'Mail Sent Successfully';
            $this->session->set_flashdata('success_message', $msg);
            //echo 1;
          } else {
            $key = settingValue('sms_key');
            $secret_key = settingValue('sms_secret_key');
            $sender_id = settingValue('sms_sender_id');
            require_once('vendor/nexmo/src/NexmoMessage.php');
            $nexmo_sms = new NexmoMessage($key, $secret_key);
            $result = $nexmo_sms->sendText($user_data['countryCode'] . $user_data['mobileno'], $sender_id, $message);
          }


          $this->db->where('country_code', $user_data['countryCode']);
          $this->db->where('mobile_number', $user_data['mobileno']);
          $this->db->where('status', 1);
          $save_otp = $this->db->update('mobile_otp', array('status' => 0));

          $this->session->set_tempdata('otp', '$user_data', 300);

          $otp_data = array(
            'endtime' => time() + 300,
            'mobile_number' => $user_data['mobileno'],
            'country_code' => $user_data['countryCode'],
            'otp' => $otp,
            'created_at' => date('Y-m-d H:i:s')
          );
          $save_otp = $this->user_login->save_otp($otp_data);


          echo json_encode(array('response' => 'ok', 'result' => 'true', 'msg' => 'OTP has sent successfully'));
        } else {
          echo json_encode(array('response' => 'error', 'result' => 'mobile', 'msg' => 'Mobile number is already exists'));
        }

      } else {
        echo json_encode(array('response' => 'error', 'result' => 'email', 'msg' => 'Email is already exists'));
      }

    } elseif (!empty($user_data['mobileno'])) {
      $is_available = $this->user_login->otp_check_email($user_data);

      $is_available_mobile = $this->user_login->otp_check_mobile_no($user_data);

      if ($is_available_mobile == 1) {

        $userdet = $this->db->where('mobileno', $user_data['mobileno'])->from('providers')->get()->row_array();
        $default_otp = settingValue('default_otp');
        if ($default_otp == 1) {
          $otp = '1234';
        } else {
          $otp = rand(1000, 9999);
        }

        $message = 'This is Your Login OTP  ' . $otp . '';
        $user_data['otp'] = $otp;

        error_reporting(0);

        if ($login_type == 'mobile' && $otp_by == 'email') {

          $body = 'Hi ' . $userdet["name"] . ',<br> ' . $message;
          $phpmail_config = settingValue('mail_config');
          if (isset($phpmail_config) && !empty($phpmail_config)) {
            if ($phpmail_config == "phpmail") {
              $from_email = settingValue('email_address');
            } else {
              $from_email = settingValue('smtp_email_address');
            }
          }

          $this->load->library('email');
          if (!empty($from_email) && isset($from_email)) {
            $mail = $this->email
              ->from($from_email)
              ->to($userdet["email"])
              ->subject('Provider Login')
              ->message($body)
              ->send();
            //print_r($mail);exit;
          }

          $msg = 'Mail Sent Successfully';
          $this->session->set_flashdata('success_message', $msg);
          echo 1;
        } else {
          $key = settingValue('sms_key');
          $secret_key = settingValue('sms_secret_key');
          $sender_id = settingValue('sms_sender_id');
          require_once('vendor/nexmo/src/NexmoMessage.php');
          $nexmo_sms = new NexmoMessage($key, $secret_key);
          $result = $nexmo_sms->sendText($user_data['countryCode'] . $user_data['mobileno'], $sender_id, $message);
          $this->session->set_tempdata('otp', '$user_data', 300);
        }


        $this->db->where('country_code', $user_data['countryCode']);
        $this->db->where('mobile_number', $user_data['mobileno']);
        $this->db->where('status', 1);
        $save_otp = $this->db->update('mobile_otp', array('status' => 0));

        $otp_data = array(
          'endtime' => time() + 300,
          'mobile_number' => $user_data['mobileno'],
          'country_code' => $user_data['countryCode'],
          'otp' => $otp,
          'created_at' => date('Y-m-d H:i:s')
        );
        $save_otp = $this->user_login->save_otp($otp_data);


        echo json_encode(array('response' => 'ok', 'result' => 'true', 'msg' => 'OTP has sent successfully'));
      } else {
        echo json_encode(array('response' => 'error', 'result' => 'mobile', 'msg' => 'Mobile number does not exists'));
      }


    }

  }

  public function send_otp_request_user()
  {

    $user_data = $this->input->post();

    $query = $this->db->query("select * from system_settings WHERE status = 1");
    $result = $query->result_array();
    $login_type = '';
    $otp_by = '';
    foreach ($result as $res) {
      if ($res['key'] == 'login_type') {
        $login_type = $res['value'];
      }
      if ($res['key'] == 'otp_by') {
        $otp_by = $res['value'];
      }
    }


    if (!empty($user_data['mobileno']) && !empty($user_data['email'])) {
      $is_available = $this->user_login->otp_check_uemail($user_data);

      $is_available_mobile = $this->user_login->otp_check_mobile_no_user($user_data);

      if ($is_available == 0) {
        if ($is_available_mobile == 0) {


          $default_otp = settingValue('default_otp'); //print_r($default_otp);exit;
          if ($default_otp == 1) {
            $otp = '1234';
          } else {
            $otp = rand(1000, 9999);
          }

          $message = 'This is Your Login OTP  ' . $otp . '';
          $user_data['otp'] = $otp;

          error_reporting(0);
          if ($login_type == 'mobile' && $otp_by == 'email') {

            $body = 'Hi ,<br> ' . $message;
            $phpmail_config = settingValue('mail_config');


            if (isset($phpmail_config) && !empty($phpmail_config)) {
              if ($phpmail_config == "phpmail") {
                $from_email = settingValue('email_address');
              } else {
                $from_email = settingValue('smtp_email_address');
              }
            }

            $this->load->library('email');
            if (!empty($from_email) && isset($from_email)) {
              $mail = $this->email
                ->from($from_email)
                ->to($user_data["email"])
                ->subject('User Registration')
                ->message($body)
                ->send();

            }

            $msg = 'Mail Sent Successfully';
            $this->session->set_flashdata('success_message', $msg);
            echo 1;
          } else {
            $key = settingValue('sms_key');
            $secret_key = settingValue('sms_secret_key');
            $sender_id = settingValue('sms_sender_id');
            require_once('vendor/nexmo/src/NexmoMessage.php');
            $nexmo_sms = new NexmoMessage($key, $secret_key);
            $result = $nexmo_sms->sendText($user_data['countryCode'] . $user_data['mobileno'], $sender_id, $message);
          }
          $this->db->where('country_code', $user_data['countryCode']);
          $this->db->where('mobile_number', $user_data['mobileno']);
          $this->db->where('status', 1);
          $save_otp = $this->db->update('mobile_otp', array('status' => 0));

          $this->session->set_tempdata('otp', '$user_data', 300);

          $otp_data = array(
            'endtime' => time() + 300,
            'mobile_number' => $user_data['mobileno'],
            'country_code' => $user_data['countryCode'],
            'otp' => $otp,
            'created_at' => date('Y-m-d H:i:s')
          );
          $save_otp = $this->user_login->save_otp($otp_data);


          echo json_encode(array('response' => 'ok', 'result' => 'true', 'msg' => 'OTP has sent successfully'));
        } else {
          echo json_encode(array('response' => 'error', 'result' => 'mobile', 'msg' => 'Mobile number is already exists'));
        }

      } else {
        echo json_encode(array('response' => 'error', 'result' => 'email', 'msg' => 'Email is already exists'));
      }

    } elseif (!empty($user_data['mobileno'])) {
      $is_available = $this->user_login->otp_check_uemail($user_data);

      $is_available_mobile = $this->user_login->otp_check_mobile_no_user($user_data);


      if ($is_available_mobile == 1) {
        $userdet = $this->db->where('mobileno', $user_data['mobileno'])->from('users')->get()->row_array();
        $default_otp = settingValue('default_otp');
        if ($default_otp == 1) {
          $otp = '1234';
        } else {
          $otp = rand(1000, 9999);
        }


        $message = 'This is Your Login OTP  ' . $otp . '';
        $user_data['otp'] = $otp;


        error_reporting(0);

        if ($login_type == 'mobile' && $otp_by == 'email') {

          $body = 'Hi ' . $userdet["name"] . ',<br> ' . $message;
          $phpmail_config = settingValue('mail_config');
          if (isset($phpmail_config) && !empty($phpmail_config)) {
            if ($phpmail_config == "phpmail") {
              $from_email = settingValue('email_address');
            } else {
              $from_email = settingValue('smtp_email_address');
            }
          }

          $this->load->library('email');
          if (!empty($from_email) && isset($from_email)) {
            $mail = $this->email
              ->from($from_email)
              ->to($userdet["email"])
              ->subject('User Login')
              ->message($body)
              ->send();
            //print_r($mail);exit;
          }

          $msg = 'Mail Sent Successfully';
          $this->session->set_flashdata('success_message', $msg);
          echo 1;
        } else {
          $key = settingValue('sms_key');
          $secret_key = settingValue('sms_secret_key');
          $sender_id = settingValue('sms_sender_id');
          require_once('vendor/nexmo/src/NexmoMessage.php');
          $nexmo_sms = new NexmoMessage($key, $secret_key);
          $result = $nexmo_sms->sendText($user_data['countryCode'] . $user_data['mobileno'], $sender_id, $message);
          $this->session->set_tempdata('otp', '$user_data', 300);
        }


        $this->db->where('country_code', $user_data['countryCode']);
        $this->db->where('mobile_number', $user_data['mobileno']);
        $this->db->where('status', 1);
        $save_otp = $this->db->update('mobile_otp', array('status' => 0));

        $otp_data = array(
          'endtime' => time() + 300,
          'mobile_number' => $user_data['mobileno'],
          'country_code' => $user_data['countryCode'],
          'otp' => $otp,
          'created_at' => date('Y-m-d H:i:s')
        );
        $save_otp = $this->user_login->save_otp($otp_data);


        echo json_encode(array('response' => 'ok', 'result' => 'true', 'msg' => 'OTP has sent successfully'));
      } else {
        echo json_encode(array('response' => 'error', 'result' => 'mobile', 'msg' => 'Mobile number does not exists'));
      }


    }

  }


  public function check_otp()
  {

    $input_data = $this->input->post();
    $username = strlen($input_data['name']);
    $input_data['share_code'] = $this->user_login->ShareCode(6, $username);
    $input_data['currency_code'] = settings('currency');

    $check_data = array('mobile_number' => $input_data['mobileno'], 'otp' => $input_data['otp']);


    if ($input_data['name'] && $input_data['email'] != '') {

      $check = $this->user_login->otp_validation($check_data, $input_data);
      $provider_details = (!empty($check['data'])) ? $check['data'] : '';

      $bodyid = 1;
      $tempbody_details = $this->templates_model->get_usertemplate_data($bodyid);
      $body = $tempbody_details['template_content'];
      $body = str_replace('{user_name}', $input_data['name'], $body);
      $preview_link = base_url();
      $body = str_replace('{preview_link}', $preview_link, $body);

      $phpmail_config = settingValue('mail_config');
      if (isset($phpmail_config) && !empty($phpmail_config)) {
        if ($phpmail_config == "phpmail") {
          $from_email = settingValue('email_address');
        } else {
          $from_email = settingValue('smtp_email_address');
        }
      }
      $this->load->library('email');

      if (!empty($from_email)) {
        $mail = $this->email
          ->from($from_email)
          ->to($input_data['email'])
          ->subject('Registration Confirmation')
          ->message($body)
          ->send();
      }


    } else {
      $check = $this->user_login->check_otp($check_data);
      $provider_details = $this->user_login->get_provider_details($input_data['mobileno']);

    }


    if (is_array($check) && $check['msg'] == 'ok') {
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;


      $session_data = array(
        'id' => $provider_details['id'],
        'chat_token' => $provider_details['token'],
        'name' => $provider_details['name'],
        'email' => $provider_details['email'],
        'mobileno' => $provider_details['mobileno'],
        'usertype' => 'provider'
      );
      $this->session->set_userdata($session_data);
      $login_details = array(
        'last_login' => date('Y-m-d H:i:s'),
        'is_online' => 1
      );
      $this->db->where('id', $provider_details['id'])->update('providers', $login_details);
      echo json_encode($return);
    } else if ($check == 'invalid_otp') {
      $return = array('response' => 'error', 'msg' => 'Invaild OTP', 'result' => 'otp_invalid');
      echo json_encode($return);
    } elseif ($check == 'otp_expired') {
      $return = array('response' => 'error', 'msg' => 'OTP expired', 'result' => 'otp_expired');
      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your OTP');
      echo json_encode($return);
    }
  }

  public function create_2fa_application()
  {
    $url = 'https://6jz9n8.api.infobip.com/2fa/2/applications';
    $headers = array(
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' => "App {$this->api_key}"
    );
    $data = array(
      "name" => "mushkilasan OTP",
      "enabled" => true,
      "configuration" => array(
        "pinAttempts"=> 5,
        "allowMultiplePinVerifications"=> true,
        "pinTimeToLive"=> "1m",
        "verifyPinLimit"=> "2/4s",
        "sendPinPerApplicationLimit"=> "5000/12h",
        "sendPinPerPhoneNumberLimit"=> "10/1h"
      )
    );
    $response = Requests::post($url, $headers, json_encode($data));
    $data = json_decode($response->body);
    $this->app_id = $data->applicationId;

    echo "<pre>";
    print_r($response->body);
//    print_r($this->app_id);
    echo "</pre>";
  }

  public function create_2fa_message_template()
  {
    $url = "https://6jz9n8.api.infobip.com/2fa/2/applications/{$this->app_id}/messages";

    $headers = array(
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' => "App {$this->api_key}",
    );

    $data = array(
      "pinType"=> "NUMERIC",
      "pinPlaceholder"=> "{{pin}}",
      "messageText"=> "Your pin is {{pin}}",
      "pinLength"=> 4,
      "language"=> "en",
      "senderId"=> "mushkilasan",
      "repeatDTMF"=> "1#",
      "speechRate"=> 1
    );

    $response = Requests::post($url, $headers, json_encode($data));

    echo "<pre>";
    print_r($response->body);
    echo "</pre>";
  }

  //send opt over sms
  public function send_otp_over_sms() {

    $input_data = $this->input->post();
    $mobileno = $input_data['mobileno'];
    $country_code = $input_data['countryCode'];
    $mobile_no = "{$country_code}{$mobileno}";

    $url = "https://6jz9n8.api.infobip.com/2fa/2/pin";

    $headers = array(
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' => "App {$this->api_key}",
    );

    $data = array(
      "applicationId"=> $this->app_id,
      "messageId"=> $this->message_id,
      "from"=> "mushkilasan",
      "to"=> $mobile_no
    );

    $response = Requests::post($url, $headers, json_encode($data));

    echo $response->body;
  }

  //get details and set session data after otp check
  public function get_user_details_after_otp_check()
  {
    $input_data = $this->input->post();
    $input_data['currency_code'] = settings('currency');
    $pin_id = $input_data['pin_id'];

    $url = "https://eje5nn.api.infobip.com/2fa/2/pin/{$pin_id}/verify";

    $headers = array(
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' => "App {$this->api_key}",
    );

    $data = array(
      "pin"=> $input_data['otp']
    );

    $_response = Requests::post($url, $headers, json_encode($data));
    $response = json_decode($_response->body);

//    $check_data = array('mobile_number' => $input_data['mobileno'], 'otp' => $input_data['otp']);

    if ($response->verified) {
      $check = [];
      $provider_details = $this->user_login->get_user_details($input_data['mobileno']);

      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;
      $session_data = array(
        'id' => $provider_details['id'],
        'chat_token' => $provider_details['token'],
        'name' => $provider_details['name'],
        'email' => $provider_details['email'],
        'mobileno' => $provider_details['mobileno'],
        'usertype' => 'user'
      );
      $this->session->set_userdata($session_data);
      $login_details = array(
        'last_login' => date('Y-m-d H:i:s'),
        'is_online' => 1
      );
      $this->db->where('id', $provider_details['id'])->update('providers', $login_details);
      echo json_encode($return);

    } else {
      $return = array('response' => 'error', 'msg' => 'Invaild OTP', 'result' => 'otp_invalid');
      echo json_encode($return);
    }
  }

  public function get_provider_details_after_otp_check()
  {
    $input_data = $this->input->post();
    $input_data['currency_code'] = settings('currency');
    $pin_id = $input_data['pin_id'];

    $url = "https://eje5nn.api.infobip.com/2fa/2/pin/{$pin_id}/verify";

    $headers = array(
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' => "App {$this->api_key}",
    );

    $data = array(
      "pin"=> $input_data['otp']
    );

    $_response = Requests::post($url, $headers, json_encode($data));
    $response = json_decode($_response->body);

//    $check_data = array('mobile_number' => $input_data['mobileno'], 'otp' => $input_data['otp']);

    if ($response->verified) {
      $check = [];
      $provider_details = $this->user_login->get_provider_details($input_data['mobileno']);

      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;
      $session_data = array(
        'id' => $provider_details['id'],
        'chat_token' => $provider_details['token'],
        'name' => $provider_details['name'],
        'email' => $provider_details['email'],
        'mobileno' => $provider_details['mobileno'],
        'usertype' => 'provider'
      );
      $this->session->set_userdata($session_data);
      $login_details = array(
        'last_login' => date('Y-m-d H:i:s'),
        'is_online' => 1
      );
      $this->db->where('id', $provider_details['id'])->update('providers', $login_details);
      echo json_encode($return);

    } else {
      $return = array('response' => 'error', 'msg' => 'Invaild OTP', 'result' => 'otp_invalid');
      echo json_encode($return);
    }

    /*if (count($provider_details) > 0) {
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;
      $session_data = array(
        'id' => $provider_details['id'],
        'chat_token' => $provider_details['token'],
        'name' => $provider_details['name'],
        'email' => $provider_details['email'],
        'mobileno' => $provider_details['mobileno'],
        'usertype' => 'provider'
      );
      $this->session->set_userdata($session_data);
      $login_details = array(
        'last_login' => date('Y-m-d H:i:s'),
        'is_online' => 1
      );
      $this->db->where('id', $provider_details['id'])->update('providers', $login_details);
      echo json_encode($return);
    } else if ($check == 'invalid_otp') {
      $return = array('response' => 'error', 'msg' => 'Invaild OTP', 'result' => 'otp_invalid');
      echo json_encode($return);
    } elseif ($check == 'otp_expired') {
      $return = array('response' => 'error', 'msg' => 'OTP expired', 'result' => 'otp_expired');
      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your OTP');
      echo json_encode($return);
    }*/
  }


//paramesh...


  public function checkemaillogin_user()
  {

    $input_data = $this->input->post();

    $check_data = array('email' => $input_data['email'], 'password' => md5($input_data['login_password']), 'status' => 1);
    $check = $this->user_login->check_emailloginuser($check_data);
    $user_details = $this->user_login->get_provider_detailsbymailuser($input_data['email']);
    //print_r($check);exit;
    if ($check['data'] != '' && $check['msg'] == 'ok') {

      $date = utc_date_conversion(date('Y-m-d H:i:s'));
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;

      if (!empty($input_data['mobileno'])) {
        $this->db->where('mobileno', $input_data['mobileno']);
        $this->db->where('status', 1);
        $this->db->update('users', array('last_login' => $date));
      }


      $session_data = array(
        'id' => $user_details['id'],
        'chat_token' => $user_details['token'],
        'name' => $user_details['name'],
        'email' => $user_details['email'],
        'mobileno' => $user_details['mobileno'],
        'usertype' => 'user'
      );
      $this->session->set_userdata($session_data);

      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your Credentials');
      echo json_encode($return);
    }


  }


  public function checkemaillogin()
  {

    $input_data = $this->input->post();

    $check_data = array('email' => $input_data['email'], 'password' => md5($input_data['login_password']), 'status' => 1);
    $check = $this->user_login->check_emaillogin($check_data);
    $provider_details = $this->user_login->get_provider_detailsbymail($input_data['email']);

    if ($check['data'] != '' && $check['msg'] == 'ok') {
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;


      $session_data = array(
        'id' => $provider_details['id'],
        'chat_token' => $provider_details['token'],
        'name' => $provider_details['name'],
        'email' => $provider_details['email'],
        'mobileno' => $provider_details['mobileno'],
        'usertype' => 'provider'
      );
      $this->session->set_userdata($session_data);
      $login_details = array(
        'last_login' => date('Y-m-d H:i:s'),
        'is_online' => 1
      );
      $this->db->where('id', $provider_details['id'])->update('providers', $login_details);
      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your Credentials');
      echo json_encode($return);
    }
  }

  public function emailregister()
  {

    $input_data = $this->input->post();
    $username = strlen($input_data['name']);
    $input_data['share_code'] = $this->user_login->ShareCode(6, $username);
    $input_data['currency_code'] = settings('currency');
    $input_data['password'] = md5($input_data['password']);

    //$check_data= array('mobile_number' => $input_data['mobileno'],'otp'=>$input_data['otp'] );

    $check = $this->user_login->insertemailusers($input_data);
    $user_details = $check['data'];

    if (is_array($check) && $check['msg'] == 'ok') {


      $bodyid = 1;
      $tempbody_details = $this->templates_model->get_usertemplate_data($bodyid);
      $body = $tempbody_details['template_content'];
      $body = str_replace('{user_name}', $input_data['name'], $body);
      $preview_link = base_url();
      $body = str_replace('{preview_link}', $preview_link, $body);

      $phpmail_config = settingValue('mail_config');
      if (isset($phpmail_config) && !empty($phpmail_config)) {
        if ($phpmail_config == "phpmail") {
          $from_email = settingValue('email_address');
        } else {
          $from_email = settingValue('smtp_email_address');
        }
      }
      $this->load->library('email');

      if (!empty($from_email)) {
        $mail = $this->email
          ->from($from_email)
          ->to($input_data['email'])
          ->subject('Registration Confirmation')
          ->message($body)
          ->send();
      }

      $date = utc_date_conversion(date('Y-m-d H:i:s'));
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;

      if (!empty($input_data['mobileno'])) {
        $this->db->where('mobileno', $input_data['mobileno']);
        $this->db->where('status', 1);
        $this->db->update('users', array('last_login' => $date));
      }


      $session_data = array(
        'id' => $user_details['id'],
        'chat_token' => $user_details['token'],
        'name' => $user_details['name'],
        'email' => $user_details['email'],
        'mobileno' => $user_details['mobileno'],
        'usertype' => 'user'
      );
      $this->session->set_userdata($session_data);

      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your Credentials');
      echo json_encode($return);
    }
  }

  public function emailregisterprovider()
  {

    $input_data = $this->input->post();
    $username = strlen($input_data['name']);
    $input_data['share_code'] = $this->user_login->ShareCode(6, $username);
    $input_data['currency_code'] = settings('currency');
    $input_data['password'] = md5($input_data['password']);

    //$check_data= array('mobile_number' => $input_data['mobileno'],'otp'=>$input_data['otp'] );

    $check = $this->user_login->insertemailproviders($input_data);
    $user_details = $check['data'];

    if (is_array($check) && $check['msg'] == 'ok') {

      $bodyid = 1;
      $tempbody_details = $this->templates_model->get_usertemplate_data($bodyid);
      $body = $tempbody_details['template_content'];
      $body = str_replace('{user_name}', $input_data['name'], $body);
      $preview_link = base_url();
      $body = str_replace('{preview_link}', $preview_link, $body);

      $phpmail_config = settingValue('mail_config');
      if (isset($phpmail_config) && !empty($phpmail_config)) {
        if ($phpmail_config == "phpmail") {
          $from_email = settingValue('email_address');
        } else {
          $from_email = settingValue('smtp_email_address');
        }
      }
      $this->load->library('email');

      if (!empty($from_email)) {
        $mail = $this->email
          ->from($from_email)
          ->to($input_data['email'])
          ->subject('Registration Confirmation')
          ->message($body)
          ->send();
      }

      $date = utc_date_conversion(date('Y-m-d H:i:s'));
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;

      if (!empty($input_data['mobileno'])) {
        $this->db->where('mobileno', $input_data['mobileno']);
        $this->db->where('status', 1);
        $this->db->update('providers', array('last_login' => $date));
      }


      $session_data = array(
        'id' => $user_details['id'],
        'chat_token' => $user_details['token'],
        'name' => $user_details['name'],
        'email' => $user_details['email'],
        'mobileno' => $user_details['mobileno'],
        'usertype' => 'provider'
      );
      $this->session->set_userdata($session_data);

      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your Credentials');
      echo json_encode($return);
    }
  }

//

  public function check_otp_user()
  {

    $input_data = $this->input->post();
    $username = strlen($input_data['name']);
    $input_data['share_code'] = $this->user_login->ShareCode(6, $username);
    $input_data['currency_code'] = settings('currency');

    $check_data = array('mobile_number' => $input_data['mobileno'], 'otp' => $input_data['otp']);


    if ($input_data['name'] && $input_data['email'] != '') {

      $check = $this->user_login->otp_validation_user($check_data, $input_data);
      $user_details = $check['data'];
      $bodyid = 1;
      $tempbody_details = $this->templates_model->get_usertemplate_data($bodyid);
      $body = $tempbody_details['template_content'];
      $body = str_replace('{user_name}', $input_data['name'], $body);
      $body = str_replace('{sitetitle}', $this->site_name, $body);
      $preview_link = base_url();
      $body = str_replace('{preview_link}', $preview_link, $body);

      $phpmail_config = settingValue('mail_config');
      if (isset($phpmail_config) && !empty($phpmail_config)) {
        if ($phpmail_config == "phpmail") {
          $from_email = settingValue('email_address');
        } else {
          $from_email = settingValue('smtp_email_address');
        }
      }
      $this->load->library('email');

      if (!empty($from_email)) {
        $mail = $this->email
          ->from($from_email)
          ->to($input_data['email'])
          ->subject('Registration Confirmation')
          ->message($body)
          ->send();
      }
    } else {

      $check = $this->user_login->check_otp_user($check_data);
      $user_details = $this->user_login->get_user_details($input_data['mobileno']);

    }


    if (is_array($check) && $check['msg'] == 'ok') {

      $date = utc_date_conversion(date('Y-m-d H:i:s'));
      $return = array('response' => 'ok', 'msg' => 'Successful', 'login_data' => $check);
      $check['logged_in'] = TRUE;

      if (!empty($input_data['mobileno'])) {
        $this->db->where('mobileno', $input_data['mobileno']);
        $this->db->where('status', 1);
        $this->db->update('users', array('last_login' => $date));
      }


      $session_data = array(
        'id' => $user_details['id'],
        'chat_token' => $user_details['token'],
        'name' => $user_details['name'],
        'email' => $user_details['email'],
        'mobileno' => $user_details['mobileno'],
        'usertype' => 'user'
      );
      $this->session->set_userdata($session_data);

      echo json_encode($return);
    } else if ($check == 'invalid_otp') {
      $return = array('response' => 'error', 'msg' => 'Invaild OTP', 'result' => 'otp_invalid');
      echo json_encode($return);
    } elseif ($check == 'otp_expired') {
      $return = array('response' => 'error', 'msg' => 'OTP expired', 'result' => 'otp_expired');
      echo json_encode($return);
    } else {
      $return = array('response' => 'error', 'msg' => 'Check Your OTP');
      echo json_encode($return);
    }
  }

  public function checkforgotmail()
  {
    $email = $this->input->post('email');
    $mode = $this->input->post('mode');

    if ($mode == 2) {
      $result = $this->user_login->check_user_emaildet($email);
      $user_type = 'user';
    } else {
      $result = $this->user_login->check_provider_emaildet($email);
      $user_type = 'provider';
    }


    //print_r($result);exit;

    if (!empty($result)) {
      $token = rand(1000, 9999);
      $pwdlink = base_url() . "user/login/userchangepwd/" . base64_encode($result['id']) . "/" . base64_encode($token) . "/" . base64_encode($mode);
      $chk_forpawd = $this->db->where('user_id', $result['id'])->where('user_type', $user_type)->where('status', '1')->select('*')->get('forget_password_det')->result_array();
      if (empty($chk_forpawd)) {
        $pwdlink_data = array(
          'endtime' => time() + 300,
          'token' => $token,
          'user_id' => $result['id'],
          'email' => $result['email'],
          'pwdlink' => $pwdlink,
          'user_type' => $user_type,
          'created_at' => date('Y-m-d H:i:s')
        );
        $save_forpwd = $this->admin->save_pwdlink_data($pwdlink_data);
      } else {
        $pwdlink_data = array(
          'endtime' => time() + 300,
          'token' => $token,
          'user_id' => $result['id'],
          'email' => $result['email'],
          'pwdlink' => $pwdlink,
          'user_type' => $user_type,
          'updated_on' => date('Y-m-d H:i:s')
        );
        $save_forpwd = $this->admin->update_pwdlink_data($pwdlink_data, $result['user_id']);
      }

      $message = 'Reset Link  ' . $pwdlink . '';
      $body = 'Hi ' . $result["name"] . ',<br> ' . $message;

      $phpmail_config = settingValue('mail_config');

      if (isset($phpmail_config) && !empty($phpmail_config)) {
        if ($phpmail_config == "phpmail") {
          $from_email = settingValue('email_address');
        } else {
          $from_email = settingValue('smtp_email_address');
        }
      }

      $this->load->library('email');
      if (!empty($from_email) && isset($from_email)) {
        $mail = $this->email
          ->from($from_email)
          ->to($result["email"])
          ->subject('User Forget Password Link')
          ->message($body)
          ->send();

      }

      echo 1;
    } else {
      $this->session->set_flashdata('error_message', 'Email ID Not Exist...!');
      echo 2;
    }
  }


  public function userchangepwd($id, $token, $mode)
  {
    //echo "hi";exit;
    $this->data['euser_id'] = base64_decode($id);
    $this->data['etoekn'] = base64_decode($token);
    $this->data['emode'] = base64_decode($mode);
    if ($this->data['emode'] == 2) {
      $user_type = 'user';
    } else {
      $user_type = 'provider';
    }
    $this->data['chk_data'] = $this->db->where('user_id', $this->data['euser_id'])->where('user_type', $user_type)->where('status', '1')->where('token', $this->data['etoekn'])->select('*')->get('forget_password_det')->result_array();

    //print_r($this->data['module']);exit;
    $this->data['module'] = 'home';
    $this->data['page'] = 'reset_forgot_password';
    $this->load->vars($this->data);
    $this->load->view($this->data['theme'] . '/template');
  }

  public function save_reset_password()
  {
    $user_id = $this->input->post('user_id');
    $mode = $this->input->post('mode');
    $confirm_password = array(
      'password' => md5($this->input->post('confirm_password'))
    );

    if ($mode == 2) {
      $chkdata = $this->db->where('id', $user_id)->select('*')->get('users')->result_array();
    } else {
      $chkdata = $this->db->where('id', $user_id)->select('*')->get('providers')->result_array();
    }


    //print_r($result);exit;

    if (!empty($chkdata)) {
      if ($mode == 2) {
        $save_pwd = $this->user_login->update_res_userpwd($confirm_password, $user_id);
      } else {
        $save_pwd = $this->user_login->update_res_providerpwd($confirm_password, $user_id);
      }
      $change_sts = $this->admin->update_forpwd_status($status = array('status' => 0), $user_id);
      $this->session->set_flashdata('error_message', 'Password Changed Successfully...!');


      echo 1;
    } else {
      $this->session->set_flashdata('error_message', 'Something Went wrong...!');
      echo 2;
    }
  }


}
