<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\SendEmailResetRequest;

class AuthController extends Controller
{
    //

    public function loginAttempt(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->hasRole('admin lab')){
                return redirect()->route('lab.ruang.index');
            }else{
                return redirect()->intended('beranda');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(){
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    public function sendResetLinkEmail(SendEmailResetRequest $request){
        $credentials = $request->only('email');
        $status = Password::sendResetLink($credentials);
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }
        return back()->withErrors([
            'email' => __($status),
        ]);
    }
}
