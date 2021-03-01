<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'profetion' => ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'min:8'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'role_id'=> $data['profetion'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'status' => 'Active',
        ]);
    }

    public function register(Request $request){
        // return $request;

        // $validator = Validator::make($request->all(), [
        //     'profetion' => 'required | max:255',
        //     'name' => 'required|max:255',
        //     'phone' => 'required|min:11|numeric',
        //     'email' => 'required|email|unique:users,email',
        //     'agreeCheckboxUser' => 'required',
        //     'password' => [
        //         'required',
        //         'string',
        //         'min:10',             // must be at least 10 characters in length
        //         'regex:/[a-z]/',      // must contain at least one lowercase letter
        //         // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
        //         // 'regex:/[0-9]/',      // must contain at least one digit
        //         // 'regex:/[@$!%*#?&]/', // must contain a special character
        //     ],
        // ]);

        return response()->json(['success'=>'Added new records.', 'url'=> '/']);

        // if ($validator->passes()) {    
        //     return response()->json(['success'=>'Added new records.', 'url'=> '/']);
        // }
        // return response()->json(['error'=>$validator->errors()]);

        // $validation = $request->validate([
        //     'name' => 'required|max:255',
        //     'phone' => 'required|min:11|numeric',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => [
        //         'required',
        //         'string',
        //         'min:10',             // must be at least 10 characters in length
        //         'regex:/[a-z]/',      // must contain at least one lowercase letter
        //         // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
        //         // 'regex:/[0-9]/',      // must contain at least one digit
        //         // 'regex:/[@$!%*#?&]/', // must contain a special character
        //     ],
            
        // ]);

        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->password = bcrypt($request->password);
        // $st = $user->save();

        // return  redirect()->back();

    }


    
    


}
