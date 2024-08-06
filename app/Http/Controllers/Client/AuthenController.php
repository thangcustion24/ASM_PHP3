<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthenController extends Controller
{
    public function login(){
        return view('client.taikhoan.dang-nhap');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Email không đúng định dạng',
        ]);

        if(Auth::attempt([
            'email'  =>  $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('client.listProductHome');
            
        }else{
            return redirect()->back()->with([
                'messageError' => 'Email hoặc mật khẩu không đúng'
            ]);
        };
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('client.authen.login')->with([
            'messageError' => 'Đăng xuất thành công'
        ]);
    }

    public function register(){
        return view('client.taikhoan.dang-ky');
    }

    public function postRegister(Request $request){
        $check = User::where('email', $request->email)->exists();
        if($check){
            return redirect()->back()->with([
                'message' => "Email đã tồn tại"
            ]);
        }else{
            $data = [
                'ho_va_ten' => $request->ho_va_ten,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ];
            $newUser = User::create($data);

            Auth::login($newUser); // tu dong dang nhap
            return redirect()->route('client.listProductHome');
        }

    }
}
