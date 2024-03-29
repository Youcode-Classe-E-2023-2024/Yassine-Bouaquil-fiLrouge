<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Config;
use Hash;

class ForgetPasswordController extends Controller
{
    public function forgetPassword() {
        return view('auth.forget-password');
    }

    public function forgetPasswordPost() {
        request()->validate([
            'email' => 'required|email|exists:users'
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => request()->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('emails.forget-password', compact('token'), function($message) {
            $message->to(request()->email);
            $message->subject('Reset Password');
        });

        return redirect()->route('forget.password')->with('success', 'we send an email');
    }

    public function resetPassword($token) {
        return view('emails.new-password', compact('token'));
    }

    public function resetPasswordPost() {
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed'
        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => request()->email,
            'token' => request()->token
        ])->first();

        if(!$updatePassword) {
            return redirect()->route('reset.password')->with('error', 'invalid');
        }

        User::where('email', request()->email)->update([
            'password' => Hash::make(request()->password)
        ]);

        DB::table('password_reset_tokens')->where(['email' => request()->email])->delete();

        return redirect()->route('login');
    }
}
