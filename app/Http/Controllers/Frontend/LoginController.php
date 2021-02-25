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

class LoginController extends Controller
{

    public function dashboard(){
        $categories = Category::where('status', 'Active')->orderBy('category_name')->get();
        $provider_profetions = Role::where('status', 'Active')->orderBy('name')->get();
        return view('user.dashboard', compact('categories','provider_profetions'));

    }
    public function logins(Request $request){
        if($request->password == 123) {
            return 'ok';
        } else{
            return 'not ok';
        }
//        dd($request);
//        return response()->json('success' => 'success');
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
        ]);


        if ($validator->passes()) {

            // return response()->json(['success'=> 'success ok']);
            $user = User::where('email', $request->email)->first();
            if($user){


                // !Hash::check($request->password, $user->password)

                if(Hash::check($request->password, $user->password)){
                // if($user->password == bcrypt($request->password)){
                    return response()->json(['success'=>'Log in success', 'url'=> '/user/dashboard']);
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
