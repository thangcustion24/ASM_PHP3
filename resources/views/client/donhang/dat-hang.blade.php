<main id="main" class="site-main">
    <style>
        .select2-selection__rendered {
            line-height: 48px !important;
        }

        .select2-container .select2-selection--single {
            height: 48px !important;
        }

        .select2-selection__arrow {
            height: 48px !important;
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single {
            border-color: #E7E8E9;
        }

        body {
            overflow-x: hidden;
        }
    </style>
    <div class="breadcrumb breadcrumb-products">
        <div class="container">
            <ol class="breadcrumb__list br-none">
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ"
                        href="https://metagent.vn/">Trang chủ</a></li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Đặt hàng"
                        href="https://metagent.vn/thanh-toan/dat-hang">Đặt hàng</a></li>
            </ol>
        </div>
    </div>

    <form action="" method="post" enctype="application/x-www-form-urlencoded" name="checkout">
        <div class="cart checkout">
            <div class="container">
                <h1 class="rs-search"><span class="title-gradient">Đặt hàng</span></h1>
                <div class="row">
                    <div class="col-lg-8 col-2xl-9">
                        <div class="checkout-address-delivery">
                            <div class="row">
                                <div class="col-2xl-6">
                                    <h3 class="checkout-title fix-mg-top0">Địa chỉ giao hàng</h3>
                                    <div id="box-address">
                                        <div class="block-border">
                                            <h4>trang <span>(Cơ quan)</span></h4>
                                            <p>Điện thoại:<span>0397183920</span></p>
                                            <p>
                                                Địa chỉ:<span>Ngõ 55 Hoàng Hoa Thám, Nhơn An, An Nhơn, Bình
                                                    Định</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2xl-6 col-payment-method">
                                    <h3 class="checkout-title">Phương thức giao hàng</h3>
                                    <div class="block-border">
                                        <label class="ds__item">
                                            <input class="ds__item__input" type="radio" name="shipping_method"
                                                id="shipping_method_1" value="1" checked />
                                            <span class="ds__item__label">Chuyển phát nhanh</span>
                                        </label>
                                        <span class="delivery-time">
                                            Thời gian giao hàng dự kiến: Thứ 7, 03/08/2024
                                        </span>
                                    </div>
                                    <div class="block-border" style="margin-top: 10px;">
                                        <label class="ds__item">
                                            <input class="ds__item__input" type="radio" name="allow_gnvc" value="1"
                                                checked="checked" />
                                            <span class="ds__item__label d-block">Tôi đồng ý với &nbsp;<a
                                                    href="https://metagent.vn/thong-tin/chinh-sach-giao-nhan-van-chuyen"
                                                    target="_blank"
                                                    style="text-decoration: underline; display: inline;">chính
                                                    sách giao vận chuyển</a>&nbsp; của METAGENT</span>
                                        </label>
                                    </div>
                                    <div class="block-border" style="margin-top: 10px;">
                                        <label class="ds__item">
                                            <input class="ds__item__input" type="radio" name="allow_ttgd" value="1"
                                                checked="checked" />
                                            <span class="ds__item__label">Tôi đã rà soát và xác nhận thông tin
                                                chi tiết về giao dịch này</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-2xl-6 checkout-address-delivery__button">
                                    <div>
                                        <a href="javascript:void(0)"
                                            class="chose-ad-df checkout-partial-choose-address">Chọn địa chỉ
                                            khác</a>
                                        <div id="partial-choose-address"></div>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0)"
                                            class="btn btn-chose-ad checkout-partial-add-address">Thêm địa
                                            chỉ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-payment">
                            <h3 class="checkout-title">Phương thức thanh toán</h3>
                            <div class="block-border">
                                <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao
                                    giờ được lưu lại.</p>
                                <div class="checkout-payment__options">
                                    <label class="ds__item">
                                        <input class="ds__item__input" type="radio" name="payment_method"
                                            id="payment_method_1" value="1" />
                                        <span class="ds__item__label">
                                            Thanh toán bằng thẻ tín dụng
                                        </span>
                                        <span style="margin-left: 3px">
                                            <img src="https://pubcdn.ivymoda.com/metagent/assets/images/payment/1.png"
                                                class="">
                                        </span>
                                    </label>
                                    <label class="ds__item">
                                        <input class="ds__item__input" type="radio" name="payment_method"
                                            id="payment_method_2" value="2" />
                                        <span class="ds__item__label">
                                            Thanh toán bằng thẻ ATM
                                            <span>Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt
                                                Nam.</span>
                                        </span>
                                    </label>
                                    <label class="ds__item">
                                        <input class="ds__item__input" type="radio" name="payment_method"
                                            id="payment_method_3" value="3" checked />
                                        <span class="ds__item__label">
                                            Thanh toán khi giao hàng
                                        </span>
                                    </label>
                                </div>
                            </div>
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
                                        <p>0đ</p>
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
                            <div class="cart-summary">
                                <div class="cart-summary__overview br-none">
                                    <h3>Mã giảm giá</h3>
                                    <div class="cart-summary__overview__item">
                                        <input class="form-control" type="text" placeholder="Mã giảm giá"
                                            name="coupon_code_text" id="coupon_code_text" value="" />
                                        <button type="button" class="btn" id="but_coupon_code">Áp dụng</button>
                                        <button type="button" class="btn btn--outline d-none" id="but_coupon_delete">Bỏ
                                            Mã</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-check-out">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>