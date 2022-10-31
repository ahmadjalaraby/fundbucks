<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended('dashboard');
        }
        return view('admin.pages.auth.login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );

        $remember = $request->input('authCheck');

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withErrors('البريد الإلكتروني أو كلمة المرور غير صحيحة، الرجاء المحاولة مرة أخرى.');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
