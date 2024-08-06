@extends('client.layout.default')

@section('title')
@parent
Trang chủ
@endsection

@section('content')

<main id="main" class="site-main">
    <style>
        .ui-state-default,
        .ui-widget-content .ui-state-default {
            display: block;
            padding: 0.2em;
            text-align: right;
            text-decoration: none;
            border: 1px solid #c5c5c5;
            background: #f6f6f6;
            font-weight: normal;
            color: #454545;
            border-radius: 0;
            width: auto;
            height: auto;
        }

        .ui-state-highlight,
        .ui-widget-content .ui-state-highlight {
            border: 1px solid #dad55e;
            background: #fffa90;
            color: #777620;
        }
    </style>
    <div class="breadcrumb breadcrumb-products">
        <div class="container">
            <ol class="breadcrumb__list br-none mr-center">
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ" href="../index.html">Trang
                        chủ</a></li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Đăng ký" href="dang-ky.html">Đăng ký</a>
                </li>
            </ol>
        </div>
    </div>

    <section class="section-list-products mg-bottom-32 mg-bottom-40 fix-mb-sign-up">
        <div class="container">
            <div>
                <h1 class="rs-search txt-center"><span class="title-gradient">SIGN UP</span></h1>
            </div>
        </div>
    </section>
    <form method="post" action="{{ route('client.authen.postRegister') }}">

        @csrf
        <section class="sign-in-sec">
            <div class="container">
                <div class="tbl-fr fix-mb">
                    <div class="fr-sign-in fr-sign-up">
                        <p class="text-justify">Tạo tài khoản để theo dõi đơn đặt hàng, quản lý danh sách
                            yêu thích và lưu thông tin thanh toán của bạn để thanh toán nhanh hơn. Nếu bạn
                            đã có tài khoản <a class="click-here" href="{{ Route('client.authen.login') }}">Bấm vào
                                đây</a> để
                            đăng nhập.</p>
                        @if(session('messageError'))
                            <p class="alert alert-danger">{{ session('messageError') }}</p>
                        @endif
                        <input class="w-input-100 mb-2" type="text" value="" name="ho_va_ten" 
                            placeholder="Họ và tên" />
                        <input class="w-input-100 mb-2" type="email" name="email" value="" placeholder="Email"
                            autocomplete="off" />
                        <input class="w-input-100 mb-2" type="password" value="" name="password"
                            placeholder="Mật khẩu" />
                        <div class="btn-sub-sign">
                            <button class="btn btn-sign-in fix-btn-sign-up" style="margin-left: 120px;"
                                type="submit">ĐĂNG KÝ</button>
                        </div>

                    </div>


                </div>
            </div>
        </section>
    </form>

    <!-- WIDGET GALLERY -->

</main>

@endsection