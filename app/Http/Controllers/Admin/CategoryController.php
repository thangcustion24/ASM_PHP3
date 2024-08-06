<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Danhmuc;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $listCategory = Danhmuc::select('id', 'ten_dm')->get();
        return view('admin.category.listCategory')->with([
            'listCategory' => $listCategory
        ]);

    }

    public function deleteCategory(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        Danhmuc::where('id', $request->id)->delete();
        return redirect()->back()->with([
            'message' => 'Xóa thành công nha ^ ^'
        ]);
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'ten_dm' => 'required',
        ], [
            'ten_dm.required' => 'Tên danh mục không được để trống',
        ]);

        $check = Danhmuc::where('ten_dm', $request->ten_dm)->exists();
        if (!$check) {
            $newUser = new Danhmuc();
            $newUser->ten_dm = $request->ten_dm;
            $newUser->save();
        }else {
            return redirect()->back()->with([
                'message_error' => 'Danh mục đã tồn tại'
            ]);
        }

        return redirect()->back()->with([
            'message' => 'Thêm mới thành công nha :)'
        ]);
    }

    public function detailCategory(Request $request)
    {
        $category = Danhmuc::where('id', $request->id)->select('id', 'ten_dm')->first();
        return json_encode($category);
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'ten_dm' => 'required',
        ], [
            'ten_dm.required' => 'Tên danh mục không được để trống',
        ]);

        $category = Danhmuc::where('id', $request->idCategory);
        if ($category->exists()) {
            $data = [
                'ten_dm' => $request->ten_dm,
            ];
            $category->update($data);
        }

        return redirect()->back()->with([
            'message' => 'Chỉnh sửa thành công nha ^ ^'
        ]);
    }
}
