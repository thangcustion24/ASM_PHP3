<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sanpham;
use Illuminate\Support\Facades\File;
use App\Models\Danhmuc;
use App\Models\Hinhanh;

class HomeController extends Controller
{
    public function homes()
    {
        return view('client.layout.content');
    }

    public function listProductHome()
    {
        $listProductHome = Sanpham::with(['mainImage', 'category:id,ten_dm'])->get();

        return view('client.layout.content')->with([
            'listProductHome' => $listProductHome,
        ]);
    }

    public function allProduct(Request $request)
    {
        // $listProductAll = Sanpham::with(['mainImage', 'category:id,ten_dm'])->take(20)->get();

        // return view('client.sanpham.tat-ca-san-pham')->with([
        //     'listProductAll' => $listProductAll,
        // ]);

        // Lấy giá trị danh mục từ yêu cầu, nếu không có thì mặc định là null
        $categoryId = $request->input('category_id');

        // Xây dựng truy vấn
        $query = Sanpham::with(['mainImage', 'category:id,ten_dm']);

        // Nếu có danh mục được chỉ định, thêm điều kiện lọc
        if ($categoryId) {
            $query->where('id_dm', $categoryId);
        }

        // Lấy danh sách sản phẩm với điều kiện lọc nếu có và giới hạn số lượng sản phẩm
        $listProductAll = $query->take(20)->get();

        // Lấy danh sách danh mục để hiển thị trong giao diện bộ lọc
        $categories = Danhmuc::all(); // Hoặc sử dụng phương thức phù hợp của bạn

        // Trả về view cùng với danh sách sản phẩm và danh mục
        return view('client.sanpham.tat-ca-san-pham')->with([
            'listProductAll' => $listProductAll,
            'categories' => $categories,
        ]);
    }

    public function detailProduct(Request $request)
    {
        $idProduct = $request->idProduct;
        $product = Sanpham::with('images:id,product_id,image_url')->find($idProduct);
        return view('client.sanpham.chi-tiet-san-pham')->with([
            'product' => $product
        ]);
    }

    public function searchProduct(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);
        $products = $data->nameProduct != "" ?
            Sanpham::where('name', 'like', "%" . $data->nameProduct . "%")->get() : [];

        return json_encode($products);
    }


}
