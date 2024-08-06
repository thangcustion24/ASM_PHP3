<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Login</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('../assets_client/images/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('../assets/css/styles.min.css')}}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{asset('../assets_client/images/pro/logo_tproject.png')}}" width="180"
                                        alt="">
                                </a>
                                @if(session('messageError'))
                                    <p class="alert alert-danger">{{ session('messageError') }}</p>
                                @endif
                                <form action="{{ route('postLogin') }} " method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="remember" name="remember">
                                            <label class="form-check-label text-dark" for="remember">
                                                Nhớ mật khẩu
                                            </label>
                                        </div>
                                        <a class="text-primary fw-bold" href="./index.html">Quên mật khẩu ?</a>
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Đăng
                                        nhập</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Bạn chưa có tài khoản?</p>
                                        <a class="text-primary fw-bold ms-2" href="#">Đăng
                                            ký tài khoản</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>