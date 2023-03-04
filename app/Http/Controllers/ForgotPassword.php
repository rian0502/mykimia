<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Controller
{

    public function index(){
        return view('formemail');
    }
    public function sendResetLinkEmail(Request $request){
        $response = Password::sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? back()->with(['status' => __($response)])
            : back()->with(['email' => __($response)]);
    }
    public function showResetPasswordForm($token){
        return dd($token);
    }
}
