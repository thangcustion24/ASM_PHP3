<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthennicationController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('admin.layout.dashboard');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Email không đúng định dạng',
        ]);

        $dataUserLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($dataUserLogin, $remember)) {
            if (Auth::user()->role == '1') {
                return redirect()->route('admin.dashboard')->with([
                ]);
            } else {
                echo "Đăng nhập vào User";
            }
        } else {
            return redirect()->back()->with([
                'messageError' => 'Email hoặc mật khẩu không đúng'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with([
            'messageError' => 'Đăng xuất thành công'
        ]);
    }
}
