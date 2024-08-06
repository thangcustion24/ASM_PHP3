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
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ" href="#">Trang
                        chủ</a></li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Đăng nhập" href="#">Đăng
                        nhập</a></li>
            </ol>
        </div>
    </div>

    <section class="section-list-products mg-bottom-32">
        <div class="container">
            <div>
                <h1 class="rs-search"><span class="title-gradient">Tài khoản của tôi</span></h1>
            </div>
        </div>
    </section>
    <section class="sign-in-sec">
        <div class="container">
            <div class="tbl-fr">
                <div class="fr-sign-in fix-mg">
                    <form action="{{ route('client.authen.postLogin') }} " method="post">
                        <h3 class="title-sign-in">Bạn đã có tài khoản T-Project ?</h3>
                        <p class="text-justify">Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành
                            viên và nhận được những ưu đãi tốt hơn!</p>
                        @if(session('messageError'))
                            <p class="alert alert-danger">{{ session('messageError') }}</p>
                        @endif
                        @csrf
                        <input class="w-input-100" type="text" name="email" id="email" placeholder="Nhập Email" style="margin-bottom: 20px;">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input class="w-input-100" type="password" name="password" id="password"
                            placeholder="Mật khẩu" style="margin-bottom: 20px;">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="fix-check-box">
                            <input type="checkbox" id="customer_remember" name="customer_remember" value="1">
                            <label for="customer_remember">Ghi nhớ đăng nhập</label>
                        </div>
                        <div class="btn-sub-sign">
                            <a class="fix-hover" href="quen-mat-khau.html">Quên mật khẩu?</a>
                            <button class="btn btn-sign-in" type="submit" name="but_login_email">ĐĂNG
                                NHẬP</button>
                        </div>
                    </form>
                </div>
                <div class="fr-new-acc fix-mg">
                    <h3>Tạo tài khoản mới</h3>
                    <p>Trở thành thành viên T-Project để nhận được</p>
                    <div class="list-color">
                        <ul>
                            <div class="item-color">
                                <li class="checked"></li><span>Tích điểm tự động</span>
                            </div>
                            <div class="item-color">
                                <li class="checked"></li><span>Nhiều ưu đãi đặc biệt</span>
                            </div>
                            <div class="item-color">
                                <li class="checked"></li><span>Thông tin mới nhất</span>
                            </div>
                        </ul>
                    </div>
                    <div class="btn-sub-sign btn-reg">
                        <a href="{{ route('client.authen.register') }}" class="btn btn-sign-in" type="submit">ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>
            <div class="tbl-fr">
                <p style="max-width: 886px">Thông tin cá nhân thu thập được sẽ chỉ được sử dụng với mục đích đã
                    công bố tại <a href="#" style="text-decoration: underline">Chính sách bảo vệ thông tin cá nhân của
                        người tiêu
                        dùng</a>. T-Project cam kết không bán, chia sẻ hay trao đổi thông tin cá nhân của khách
                    hàng thu thập trên trang web cho một bên thứ ba nào khác trái quy định pháp luật.</p>
            </div>
        </div>
    </section>

    <!-- WIDGET GALLERY -->

</main>

@endsection