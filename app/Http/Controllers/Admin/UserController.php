<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function listUser()
    {
        $listUser = User::select('id', 'ho_va_ten', 'email', 'role')->get();
        return view('admin.user.listUser')->with([
            'listUser' => $listUser
        ]);
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'ho_va_ten' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'role' => 'required',
            'so_dien_thoai' => ['required', 'regex:/^0\d{9}$/'],
            'dia_chi' => 'required'
        ], [
            'email.required' => 'Email không được để trống',
            'ho_va_ten.required' => 'Họ và tên  không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Email không được để trống',
            'role.required' => 'Chức vụ không được để trống',
            'dia_chi.required' => 'Địa chỉ không được để trống',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'so_dien_thoai.regex' => 'Số điện thoại không đúng định dạng',
        ]);

        $check = User::where('email', $request->email)->exists();
        if (!$check) {
            $newUser = new User();
            $newUser->ho_va_ten = $request->ho_va_ten;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->password);
            $newUser->role = $request->role;
            $newUser->so_dien_thoai = $request->so_dien_thoai;
            $newUser->dia_chi = $request->dia_chi;
            $newUser->save();
        } else {
            return redirect()->back()->with([
                'message_error' => 'Email đã tồn tại'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'Thêm mới thành công nha :)'
        ]);
    }

    public function deleteUser(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        User::where('id', $request->id)->delete();
        return redirect()->back()->with([
            'message' => 'Xóa thành công nha ^ ^'
        ]);
    }

    public function detailUser(Request $request)
    {
        $user = User::where('id', $request->id)->select('id', 'ho_va_ten', 'email', 'role', 'so_dien_thoai', 'dia_chi')->first();
        return json_encode($user);
    }

    public function updateUser(Request $request)
    {
        // $request->validate([
        //     'ho_va_ten' => 'required',
        //     'email' => ['required', 'email'],
        //     'role' => 'required',
        //     'so_dien_thoai' => ['required', 'regex:/^0\d{9}$/'],
        //     'dia_chi' => 'required'
        // ], [
        //     'email.required' => 'Email không được để trống',
        //     'ho_va_ten.required' => 'Họ và tên  không được để trống',
        //     'email.email' => 'Email không đúng định dạng',
        //     'role.required' => 'Chức vụ không được để trống',
        //     'dia_chi.required' => 'Địa chỉ không được để trống',
        //     'so_dien_thoai.required' => 'Số điện thoại không được để trống',
        //     'so_dien_thoai.regex' => 'Số điện thoại không đúng định dạng',
        // ]);

        // $user = User::where('id', $request->idUser);
        // if ($user->exists()) {
        //     $data = [
        //         'ho_va_ten' => $request->ho_va_ten,
        //         'email' => $request->email,
        //         'role' => $request->role,
        //         'dia_chi' => $request->dia_chi,
        //         'so_dien_thoai' => $request->so_dien_thoai,
        //     ];
        //     $user->update($data);
        // }

        // return redirect()->back()->with([
        //     'message' => 'Chỉnh sửa thành công nha ^ ^'
        // ]);

        $request->validate([
            'ho_va_ten' => 'required',
            'email' => ['required', 'email'],
            'role' => 'required',
            'so_dien_thoai' => ['required', 'regex:/^0\d{9}$/'],
            'dia_chi' => 'required'
        ], [
            'email.required' => 'Email không được để trống',
            'ho_va_ten.required' => 'Họ và tên  không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'role.required' => 'Chức vụ không được để trống',
            'dia_chi.required' => 'Địa chỉ không được để trống',
            'so_dien_thoai.required' => 'Số điện thoại không được để trống',
            'so_dien_thoai.regex' => 'Số điện thoại không đúng định dạng',
        ]);

        $user = User::where('id', $request->idUser);
        if ($user->exists()) {
            $data = [
                'ho_va_ten' => $request->ho_va_ten,
                'email' => $request->email,
                'role' => $request->role,
                'dia_chi' => $request->dia_chi,
                'so_dien_thoai' => $request->so_dien_thoai,
            ];
            $user->update($data);
        }

        return redirect()->back()->with([
            'message' => 'Chỉnh sửa thành công nha ^ ^'
        ]);


        
    }


}