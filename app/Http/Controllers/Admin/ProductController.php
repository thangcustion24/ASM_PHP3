<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sanpham;
use Illuminate\Support\Facades\File;
use App\Models\Danhmuc;
use App\Models\Hinhanh;


class ProductController extends Controller
{
    public function listProduct()
    {
        $listProduct = Sanpham::with(['category:id,ten_dm', 'images:id,product_id,image_url,image_type'])
            ->get();
        return view('admin.product.listProduct')->with([
            'listProduct' => $listProduct
        ]);
    }

    public function addProduct()
    {
        $categories = Danhmuc::get();
        return view('admin.product.addProduct')->with([
            'categories' => $categories
        ]);
    }

    public function addPostProduct(Request $request)
    {
        $request->validate([
            'ten_sp' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gia_sp' => 'required',
            'giam_gia' => 'required',
            'mo_ta' => 'required',
            'so_luong' => 'required',
            'so_luot_xem' => 'required',
            'id_dm' => 'required',
        ], [
            'ten_sp.required' => 'Tên sản phẩm không được để trống',
            'images.*.required' => 'Ảnh không được để trống',
            'images.*.image' => 'File gửi lên không phải ảnh',
            'images.*.mimes' => 'File gửi lên không phải ảnh',
            'images.*.max' => 'File ảnh quá dung lượng cho phép',
            'gia_sp.required' => 'Giá sản phẩm cũ không được để trống',
            'giam_gia.required' => 'Giá sản phẩm giảm không được để trống',
            'mo_ta.required' => 'Mô tả không được để trống',
            'so_luong.required' => 'Số lượng không được để trống',
            'so_luot_xem.required' => 'Mô tả không được để trống',
            'id_dm.required' => 'Danh mục không được để trống',
        ]);

        $data = [
            'ten_sp' => $request->ten_sp,
            'gia_sp' => $request->gia_sp,
            'giam_gia' => $request->giam_gia,
            'mo_ta' => $request->mo_ta,
            'so_luong' => $request->so_luong,
            'so_luot_xem' => $request->so_luot_xem,
            'id_dm' => $request->id_dm,
        ];
        $product = Sanpham::create($data);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $key => $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('imagesProduct'), $imageName);

                Hinhanh::create([
                    'product_id' => $product->id,
                    'image_url' => 'imagesProduct/' . $imageName,
                    'image_type' => $key == 0 ? 'main' : 'secondary'
                ]);
            }
        }

        return redirect()->route('admin.products.listProduct')->with([
            'message' => 'Thêm Mới Thành Công'
        ]);
    }

    public function deleteProduct(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        Sanpham::where(column: 'id', operator: $request->id)->delete();
        return redirect()->back()->with([
            'message' => 'Xóa Thành Công'
        ]);
    }

    public function updateProduct($idProduct)
    {
        $product = Sanpham::with([
            'images:id,product_id,image_url',
            'category:id,ten_dm'
        ])->find($idProduct);

        $categories = Danhmuc::get();
        return view('admin.product.updateProduct')->with([
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function detailProduct($idProduct)
    {
        $product = Sanpham::with([
            'images:id,product_id,image_url',
            'category:id,ten_dm'
        ])->find($idProduct);

        $categories = Danhmuc::get();
        return view('admin.product.detailProduct')->with([
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function updatePatchProduct(Request $request){
        $request->validate([
            'ten_sp' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gia_sp' => 'required',
            'giam_gia' => 'required',
            'mo_ta' => 'required',
            'so_luong' => 'required',
            'so_luot_xem' => 'required',
            'id_dm' => 'required',
        ], params: [
            'ten_sp.required' => 'Tên sản phẩm không được để trống',
            'images.*.required' => 'Ảnh không được để trống',
            'images.*.image' => 'File gửi lên không phải ảnh',
            'images.*.mimes' => 'File gửi lên không phải ảnh',
            'images.*.max' => 'File ảnh quá dung lượng cho phép',
            'gia_sp.required' => 'Giá sản phẩm cũ không được để trống',
            'giam_gia.required' => 'Giá sản phẩm giảm không được để trống',
            'mo_ta.required' => 'Mô tả không được để trống',
            'so_luong.required' => 'Số lượng không được để trống',
            'so_luot_xem.required' => 'Mô tả không được để trống',
            'id_dm.required' => 'Danh mục không được để trống',
        ]);

        $data = [
            'ten_sp' => $request->ten_sp,
            'gia_sp' => $request->gia_sp,
            'giam_gia' => $request->giam_gia,
            'mo_ta' => $request->mo_ta,
            'so_luong' => $request->so_luong,
            'so_luot_xem' => $request->so_luot_xem,
            'id_dm' => $request->id_dm,
        ];
        Sanpham::find($request->idProduct)->update($data);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            // Xóa ảnh cũ
            $productImage = Hinhanh::where('product_id', $request->idProduct)->select('image_url');
            foreach($productImage->get() as $value){
                File::delete(public_path($value->image_url));
            }
            $productImage->delete();

            foreach ($images as $key => $image) {
                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('imagesProduct'), $imageName);


                Hinhanh::create([
                    'product_id' => $request->idProduct,
                    'image_url' => 'imagesProduct/' . $imageName,
                    'image_type'    => $key == 0 ? 'main' : 'secondary'
                ]);
            }
        }

        return redirect()->route('admin.products.listProduct')->with([
            'message'   => 'Chỉnh Sửa Thành Công'
        ]);
    }


}
