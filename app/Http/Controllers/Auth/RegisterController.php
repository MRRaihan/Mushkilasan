<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        $this->redirectTo = route('home');
        return $this->redirectTo;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'profetion' => ['required', 'max:255'],
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'phone' => ['required', 'min:8'],
    //         'password' => ['required', 'string', 'min:6'],
    //     ]);

    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {

    //     return User::create([
    //         'role_id'=> $data['profetion'],
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'password' => Hash::make($data['password']),
    //         'status' => 'Active',
    //     ]);
    // }





    //custom work for FormSubmission
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profetion1' => ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'min:8'],
            'password' => ['required', 'string', 'min:6'],
            'agreeCheckboxUser' => ['required'],
        ]);

        if ($validator->passes()) {
            $user = new User;
            $profetion1 = $user->role_id = $request->profetion1;

            $roles = Role::where('status' , 'Active')->get();

            foreach($roles as $role){
                if($profetion1 == $role->id){
                    $user->user_type = Str::slug($role->name, '-');
                    // $user->user_type = str_slug($name, '-');
                }
            }

            // if($profetion1 == 1){
            //     $user->user_type = 'provider';
            // }elseif($profetion1 == 2){
            //     $user->user_type = 'agent';
            // }else{
            //     $user->user_type = 'corporate';
            // }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->phone = $request->phone;
            $user->password = bcrypt($request->password);
            $user->is_agree = $request->agreeCheckboxUser;
            if($user->save()){
                return response()->json(['success'=>'Your form has been successfully submitted.', 'url'=> '/']);
            }
        }
    	return response()->json(['error'=>$validator->errors()]);
    }
}
