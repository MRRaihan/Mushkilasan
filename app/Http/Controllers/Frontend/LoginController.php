<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
//        return $request;
        if($request->password == 123) {
            return 'ok';
        } else{
            return 'not ok';
        }
//        dd($request);
//        return response()->json('success' => 'success');
    }
}
