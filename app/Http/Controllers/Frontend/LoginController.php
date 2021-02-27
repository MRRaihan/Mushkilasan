<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->passes()) {
            $user = User::where('email', $request->email)->first();
            if($user){

                if(Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password])){
                $dashboard = '/'.$user->user_type.'/dashboard';
                    return response()->json(['success'=>'Log in success', 'url'=> $dashboard]);
                }else{
                    return response()->json(['err_password'=>'Incorrect Password']);
                }

            } else{
                return response()->json(['err_email'=>'Your email not found']);
            }
        }

        return response()->json(['error'=>$validator->errors()]);

    }
}
