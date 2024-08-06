@extends('client.layout.default')

@section('title')
@parent
Trang chủ
@endsection

@section('content')

<main id="main" class="site-main">
    <div class="breadcrumb breadcrumb-products">
        <div class="container">
            <ol class="breadcrumb__list br-none">
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ" href="">Trang chủ</a></li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Giỏ hàng" href="">Giỏ hàng</a></li>
            </ol>
        </div>
    </div>

    <div class="cart pt-40 cart-page cart-custom">
        <div class="container">
            <h1 class="rs-search"><span class="title-gradient">Giỏ hàng của bạn</span></h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart__list" id="cart-box">
                        <table class="cart__table">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Tổng tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @if(count($cart->cartDetails) != 0)
                                                        <form action="{{ route('client.cart.updateCart') }}" method="post">
                                                            @method('patch')
                                                            @csrf
                                                            <tbody>
                                                                @php
                                                                    $tongTien = 0;
                                                                @endphp

                                                                @foreach($cart->cartDetails as $key => $cartDetail)
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <div class="cart__product-item">
                                                                                                            <div class="cart__product-item__img">
                                                                                                                @if($cartDetail->product->mainImage)
                                                                                                                    <img class="lazy"
                                                                                                                        src="{{ asset($cartDetail->product->mainImage->image_url) }}"
                                                                                                                        alt="{{ $cartDetail->product->ten_sp }}">
                                                                                                                @endif
                                                                                                                <!-- <a href="#"><img src="#" alt="Áo Polo Regular phối màu MS 57D4154" class="lazy" /></a> -->
                                                                                                            </div>
                                                                                                            <div class="cart__product-item__content">
                                                                                                                <h3 class="cart__product-item__title">
                                                                                                                    <a href="#">{{ $cartDetail->product->ten_sp }}</a>
                                                                                                                </h3>
                                                                                                                <div class="cart__product-item__properties">
                                                                                                                    <p>Màu sắc: <span>Đen</span></p>
                                                                                                                    <p>Size: <span class="text-uppercase">m</span></p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <div class="product-detail__quantity-input">
                                                                                                            <input type="hidden" value="{{ $cartDetail->id }}"
                                                                                                                name="cartDetailId[]">
                                                                                                            <input type="number" name="quantity[]"
                                                                                                                value="{{ $cartDetail->quantity }}" data-product-sub-id="22682"
                                                                                                                data-hide-aside="1" />
                                                                                                            <div class="product-detail__quantity--increase"> + </div>
                                                                                                            <div class="product-detail__quantity--decrease"> - </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div class="cart__product-item__price">
                                                                                                            {{ number_format($cartDetail->product->giam_gia) }} VNĐ
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        @php
                                                                                                            $thanhtien = intval($cartDetail->product->giam_gia) * intval($cartDetail->quantity);
                                                                                                            $tongTien += $thanhtien;

                                                                                                            // echo number_format($thanhtien) . " VNĐ";
                                                                                                        @endphp
                                                                                                        <div class="cart__product-item__price">
                                                                                                            {{ number_format($thanhtien) . " VNĐ" }}
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <i class="icofont-close-line close-icon-cart cart_product_sub_remove"
                                                                                                            data-product-index="0" data-confirm="1"></i>
                                                                                                    </td>

                                                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </form>
                            @else
                                <tbody>
                                    <tr>
                                        <td colspan="6">Bạn chưa có sản phẩm trong giỏ hàng</td>
                                        <td>
                                            <a href="{{ route('users.home') }}" class="btn btn-success">Tiếp tục mua
                                                hàng</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 cart-page__col-summary">
                    <div class="col-custom-cart">
                        <div class="cart-summary" id="order-summary">
                            <div class="cart-summary__overview br-none">
                                <h3>Tóm tắt đơn hàng</h3>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng sản phẩm</p>
                                    <p>2</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng tiền hàng</p>
                                    <p>1.780.000đ</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Giảm Voucher</p>
                                    <p>0</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tạm tính</p>
                                    <p>890.000đ</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Phí vận chuyển</p>
                                    <p>38.000đ</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tiền thanh toán</p>
                                    <p><b>928.000đ</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-check-out" href="https://metagent.vn/thanh-toan/dat-hang">Thanh
                            toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- Modal delete-->
<div class="modal fade" id="modelDelete" tabindex="-1" aria-labelledby="modelDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelDeleteLabel">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('client.cart.deleteCart') }}" method="post">
                @method('delete')
                @csrf
                <input type="hidden" value="" id="inputCartDetailId" name="cartDetailId">
                <div class="modal-body">
                    <span class="text-danger">Bạn có muốn xóa không ?</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Xác nhận xóa</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection