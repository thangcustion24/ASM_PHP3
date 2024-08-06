<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sanpham;
use Illuminate\Support\Facades\File;
use App\Models\Danhmuc;
use App\Models\Hinhanh;
use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = Cart::where('user_id', Auth::id());
        if ($cart->exists()) {
            // Đã có giỏ hàng => cập nhật Cart detail
            $cart = $cart->first();
            $cartDetail = CartDetail::where('cart_id', $cart->id)->where('product_id', $request->product_id);
            if ($cartDetail->exists()) {
                $cartDetail->update([
                    'quantity' => intval($cartDetail->first()->quantity) + intval($request->quantity)
                ]);
            } else {
                CartDetail::create([
                    'cart_id' => $cart->id,
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity
                ]);
            }

        } else {
            // Tạo giỏ hàng => Tạo cart detail
            $newCart = Cart::create([
                'user_id' => Auth::id()
            ]);
            CartDetail::create([
                'cart_id' => $newCart->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->route('client.cart.viewCart');
    }

    public function viewCart()
    {
        // $cart = Cart::where('user_id', Auth::id())
        //     ->with('cartDetails:id,cart_id,product_id, quantity')
        //     ->with('cartDetails.product:id, ten_sp, giam_gia')
        //     ->with('cartDetails.product.category:id, ten_dm')
        //     ->first();
        $cart = Cart::where('user_id', Auth::id())
            ->with([
                'cartDetails' => function ($query) {
                    $query->select('id', 'cart_id', 'product_id', 'quantity')
                        ->with([
                            'product' => function ($query) {
                                $query->select('id', 'ten_sp', 'giam_gia')
                                    ->with([
                                        'category:id,ten_dm',
                                        'mainImage:id,product_id,image_url' // Thay 'image_url' bằng tên trường thực tế lưu trữ URL ảnh
                                    ]);
                            }
                        ]);
                }
            ])
            ->first();

        return view('client.donhang.gio-hang')->with([
            'cart' => $cart
        ]);
    }

    public function updateCart(Request $req)
    {
        foreach ($req->cartDetailId as $key => $cartDetailId) {
            CartDetail::find($cartDetailId)->update([
                'quantity' => $req->quantity[$key]
            ]);
        }

        return redirect()->back()->with([
            'mesage' => 'Cập nhật thành công'
        ]);
    }


    public function deleteCart(Request $req)
    {
        CartDetail::find($req->cartDetailId)
            ->delete();
        return redirect()->back()->with([
            'message' => 'Xóa thành công'
        ]);
    }
}
