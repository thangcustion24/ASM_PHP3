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
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Quên mật khẩu"
                        href="quen-mat-khau.html">Quên mật khẩu</a></li>
            </ol>
        </div>
    </div>

    <section class="section-list-products mg-bottom-32">
        <div class="container">
            <div>
                <h1 class="rs-search"><span class="title-gradient">Quên mật khẩu</span></h1>
            </div>
        </div>
    </section>
    <section class="sign-in-sec">
        <div class="container">
            <div class="tbl-fr">
                <div class="fr-sign-in fix-mg">
                    <form class="auth__form form-login" enctype="application/x-www-form-urlencoded" name="frm_register"
                        method="post" action="#">
                        <h3 class="title-sign-in">Bạn muốn tìm lại mật khẩu ?</h3>
                        <p class="text-justify">Vui lòng nhập lại số điện thoại đã đăng ký, hệ thống của chúng
                            tôi sẽ gửi cho bạn 1 đường dẫn để thay đổi mật khẩu.</p>
                        <input class="w-input-100" type="text" name="customer_phone" id="" placeholder="Số điện thoại">
                        <input class="w-input-100" name="captcha" required type="text"
                            placeholder="Nhập kí tự trong hình vào ô sau">
                        <p class="img_capcha"><img src="../ajax/captcha.png" border="0" class="img-responsive" /></p>
                        <div class="btn-sub-sign">
                            <button class="btn btn-sign-in" type="submit">Gửi đi</button>
                        </div>
                    </form>
                </div>
                <div class="fr-new-acc fix-mg">
                    <h3>Tạo tài khoản mới</h3>
                    <p>Tạo tài khoản để nhận được cái ưu đãi của METAGENT</p>
                    <div class="list-color">
                        <ul>
                            <div class="item-color">
                                <li class="checked"></li><span>Ưu đãi 1</span>
                            </div>
                            <div class="item-color">
                                <li class="checked"></li><span>Quyền lợi 2</span>
                            </div>
                            <div class="item-color">
                                <li class="checked"></li><span>Quyền lợi 3</span>
                            </div>
                        </ul>
                    </div>
                    <div class="btn-sub-sign btn-reg">
                        <a href="dang-ky.html" class="btn btn-sign-in" type="submit">ĐĂNG KÝ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WIDGET GALLERY -->

</main>

@endsection