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
    //melakukan login pada user
    public function loginAttempt(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->hasRole('admin lab')) {
                return redirect()->intended('admin/lab/ruang');
            } else {
                return redirect()->intended('jurusan/lokasi');
            }
        }
        return back()->withErrors([
            'status' => 'Email dan Password tidak cocok.',
        ]);
    }
    //melakukan logout pada user
    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    //melakukan pengiriman link reset password
    public function sendResetLinkEmail(SendEmailResetRequest $request)
    {
        $credentials = $request->only('email');
        $status = Password::sendResetLink($credentials);
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success', 'Link reset password telah terkirim');
        }
        return back()->with([
            'error' => 'Link reset password gagal dikirim',
        ]);
    }
    //menampilkan halaman reset password
    public function showResetPasswordForm($token)
    {

        return view('auth.reset', ['token' => $token]);
    }
    //melakukan reset password
    public function resetPassword(UpdateResetPasswordRequest $request)
    {
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
