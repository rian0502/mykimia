<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\SendEmailResetRequest;
use App\Http\Requests\UpdateResetPasswordRequest;

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
            'status' => 'Email dan Password tidak cocok.',
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
            'status' => __($status),
        ]);
    }

    public function showResetPasswordForm($token){
        
        return view('auth.reset', ['token' => $token]);
    }

    public function resetPassword(Request $request){
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(Str::random(60));
                $user->save();
            }
        );
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status));
        }
        return back()->withErrors([
            'email' => __($status),
        ]);
    }
}
