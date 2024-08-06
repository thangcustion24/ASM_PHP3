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
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ"
                        href="#">Trang chủ</a></li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Thông tin tài khoản"
                        href="#">Thông tin tài khoản</a></li>
            </ol>
        </div>
    </div>

    <section class="section-list-products">
        <div class="container">
            <div>
                <h1 class="rs-search"><span class="title-gradient">Thông tin tài khoản</span></h1>
            </div>
            <div class="content-address">
                <div class="list-recent">
                    <ul>
                        <li>
                            <a href="{{route('client.cart.infoUser')}}">
                                <span class="pd-13">
                                    <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/UserCircle.svg"
                                        alt="Thông tin tài khoản" />
                                </span>
                                <span class="hover-bg add-strong">Thông tin tài khoản</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pd-13">
                                    <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/ShoppingBag.svg"
                                        alt="Quản lý đơn hàng" />
                                </span>
                                <span class="hover-bg ">Quản lý đơn hàng</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="box-address account-content-ct">
                    <div class="account__info-ct account__info--item-big">
                        <div class="account-ct-items">
                        @if (Auth::check())
                            <h3 class="account__title-ct">Thông tin tài khoản</h3>
                            <div class="account__info-ct--details">
                                <p>{{Auth::user()->ho_va_ten}}<br />
                                    {{Auth::user()->email}}<br />
                                </p>
                            </div>
                            <a href="#" class="account__link-ct"><span class="icon-account--edit"></span></a>
                        @endif
                        </div>
                    </div>
                    <div class="account__info-address account__info--item-big">
                        <h3 class="account__title-ct">Địa chỉ nhận hàng</h3>
                        <div class="account__info--list">
                            <div class="account-ct-items">
                                <div class="account__info-ct--details">
                                    <p>{{Auth::user()->ho_va_ten}}
                                        <span>(Cơ quan)</span>
                                    </p>
                                    <p>Ngõ 55 Hoàng Hoa Thám, Nhơn An, An Nhơn, Bình Định</p>
                                    <p>Điện thoại: 0397183920</p>
                                    <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/account--address.svg"
                                        alt="Địa chỉ" data-toggle="tooltip" data-placement="top"
                                        title="Địa chỉ mặc định" /> <a
                                        href="https://metagent.vn/khach-hang/cap-nhat-dia-chi/6937"
                                        class="account__link-ct">
                                        <span class="icon-account--edit"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="https://metagent.vn/khach-hang/them-dia-chi" class="btn btn-account-address">thêm địa
                            chỉ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection