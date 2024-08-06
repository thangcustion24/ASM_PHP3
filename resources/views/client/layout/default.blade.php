<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | T - Project</title>
    <link rel="canonical" href="index.html" />
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="Trang chủ | T-Project" />
    <link rel="manifest" href="manifest73dd.json?gcm_sender_id=" />
    <script type="text/javascript">
        var base_url = 'index.html';
        var guest_user = 'guest:ddeda208fa828b6702365db870d6998a';
        var static_url_product = 'https://pubcdn.ivymoda.com/files/product/';
        var datetime_now = parseDateTime('2024-07-29 18:53:03');

        function parseDateTime(date) {
            const parsed = Date.parse(date);
            if (!isNaN(parsed)) {
                return parsed;
            }

            return Date.parse(date.replace(/-/g, 'index.html').replace(/[a-z]+/gi, ' '));
        }
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NNH87PC');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-36H2NWE3QV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-36H2NWE3QV');
    </script>


    <!-- Meta Pixel Code -->
    <meta name="facebook-domain-verification" content="lr846xvllj0w61nj9mht5n3ek657he" />
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1838205156545941');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1838205156545941&amp;ev=PageView&amp;noscript=1" /></noscript>

    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=404613343232744&amp;ev=PageView&amp;noscript=1" />
    </noscript>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('../assets_client/images/favicon.ico') }}" type="image/png" sizes="16x16" />
    <link rel="shortcut icon" href="{{ asset('../assets_client/images/favicon.ico') }}" />
    <!-- End Favicon -->

    <!-- Libraries CSS -->
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/icofont/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/owl-carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/swiper/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/fancybox/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/toastr/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/sweetalert/sweetalert2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/libs/select2/select2.min.css') }}" />
    <!-- End Libraries CSS -->

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('../assets_client/css/generals.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/style_0230f4.css?v=3') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/stylebea6.css?v=7') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/style_0330f4.css?v=3') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/style_0430f4.css?v=3') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/style_05.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/custom3860.css?v=1') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/product-detail-temp3860.css?v=1') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/commone5bf.css?v=12') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/responsive1bce.css?v=6') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/responsive-13860.css?v=1') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/responsive-25e1f.css?v=2') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/responsive-3.css') }}" />
    <link rel="stylesheet" href="{{ asset('../assets_client/css/new_styleae52.css?v=5') }}" />
    <!-- End Main CSS -->

</head>

<body>
    <div id="wrapper">
        <!-- header -->
        @include('client.layout.header')
        <!-- end header -->


        <!-- content -->
        @yield('content')
        <!-- end content -->

        <!--Footer-->
        @include('client.layout.footer')
        <!--End Footer-->


        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KF775BP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Libraries JS -->
        <script src="{{asset('../assets_client/js/jquery.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{asset('../assets_client/libs/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/bootstrap/js/poper.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/fancybox/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/vanill-sticky/vanilla-sticky.js')}}"></script>
        <script src="{{asset('../assets_client/js/affix.js')}}" type="text/javascript"></script>
        <script src="{{asset('../assets_client/js/js.cookie.js')}}" type="text/javascript"></script>
        <script src="{{asset('../assets_client/libs/toastr/toastr.js')}}" type="text/javascript"></script>
        <script src="{{asset('../assets_client/libs/sweetalert/sweetalert2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('../assets_client/libs/select2/select2.min.js')}}"></script>
        <script src="{{asset('../assets_client/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('../assets_client/js/jquery.serializejson.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/lazy-load/jquery.lazy.min.js')}}"></script>
        <script src="{{asset('../assets_client/libs/zoom/jquery.zoom.min.js')}}"></script>
        <!-- End Libraries JS -->

        <!-- Main JS -->
        <script src="{{asset('../assets_client/js/custom_main1bce.js?v=6')}}"></script>
        <script src="{{asset('../assets_client/js/main7b30.js?v=4')}}"></script>
        <script src="{{asset('../assets_client/js/common8e0e.js?v=8')}}"></script>
        <!-- End Main JS -->

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNH87PC" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </div>

    <script type=text/javascript>
    function setScreenHWCookie() {
        Cookies.set('screen_ak', screen.width+'x'+screen.height+':'+guest_user, { expires: 365 })
        return true;
    }
    setScreenHWCookie();

    toastr.options.positionClass = 'toast-top-right';
    toastr.options.preventDuplicates = true;
</script>

    <!-- Start of widget script -->
    <script type="text/javascript">
        var logged_in_username = '';
        var logged_in_user_phone = '';
        var logged_in_id = '';
        var list_shop_json = [{ "shop_id": "1", "shop_code": "GV", "shop_code3": "GV1", "shop_name": "153 Gi\u1ea3ng V&otilde;, Ba \u0110&igrave;nh, H&agrave; N\u1ed9i", "shop_district_name": "Ba \u0110&igrave;nh", "shop_city_name": "H&agrave; N\u1ed9i", "shop_region": "1", "shop_phone": "0243 203 3285", "lat": "21.028439", "lng": "105.825696", "shop_order": "1000", "shop_men": "1", "shop_kids": "0", "shop_name2": "Gi\u1ea3ng V&otilde;" }, { "shop_id": "2", "shop_code": "TC", "shop_code3": "TC1", "shop_name": "TN - 28 MegaMall Times City, Hai B&agrave; Tr\u01b0ng, H&agrave; N\u1ed9i", "shop_district_name": "Hai B&agrave; Tr\u01b0ng", "shop_city_name": "H&agrave; N\u1ed9i", "shop_region": "1", "shop_phone": "0243 201 8133", "lat": "20.994899", "lng": "105.868914", "shop_order": "995", "shop_men": "1", "shop_kids": "0", "shop_name2": "MegaMall Times City" }, { "shop_id": "3", "shop_code": "LQ", "shop_code3": "LQ2", "shop_name": "292D L\u1ea1c Long Qu&acirc;n, T&acirc;y H\u1ed3, H&agrave; N\u1ed9i", "shop_district_name": "T&acirc;y H\u1ed3", "shop_city_name": "H&agrave; N\u1ed9i", "shop_region": "1", "shop_phone": "0243 202 0348", "lat": "21.060401", "lng": "105.809157", "shop_order": "990", "shop_men": "1", "shop_kids": "0", "shop_name2": "L\u1ea1c Long Qu&acirc;n" }, { "shop_id": "4", "shop_code": "R2", "shop_code3": "RY2", "shop_name": "GH B2 - R3 - 34 TTTM Royal City, 72A Nguy\u1ec5n Tr&atilde;i, Thanh Xu&acirc;n, H&agrave; N\u1ed9i", "shop_district_name": "Thanh Xu&acirc;n", "shop_city_name": "H&agrave; N\u1ed9i", "shop_region": "1", "shop_phone": "024 66866834", "lat": "21.003057", "lng": "105.815054", "shop_order": "985", "shop_men": "1", "shop_kids": "0", "shop_name2": "Metagent  - Vincom MegaMall Royal City" }];
        var popup_enabled = [];

    </script>
    <div id="overlay"></div>
    <div id="partial_product"></div>
    <div class="size-prod--ct__measure">
        <div class="size-prod--ct__overlay"></div>
        <div class="size-prod--ct__measure--content">
            <div class="size-prod--ct__measure--body">
                <h3 class="size-prod--ct__title"><span class="title-gradient">Số đo cơ thể bạn</span></h3>
                <p class="size-prod--ct__desc">Tìm size vừa vặn với bạn</p>
                <div class="size-prod--ct__form">
                    <div class="size-prod--ct--hieght size-prod--ct-ip">
                        <input type="text" placeholder="Chiều cao">
                        <span>cm</span>
                    </div>
                    <div class="size-prod--ct--weight size-prod--ct-ip">
                        <input type="text" placeholder="Cân nặng">
                        <span>kg</span>
                    </div>
                    <input type="submit" value="tiếp tục" class="btn btn-buy-now">
                </div>
                <div class="action-close">
                    <i class="icon-ic_close"></i>
                </div>
            </div>
            <div class="size-prod--ct--details">
                <h3 class="size-prod--ct__title">
                    <span class="title-gradient">Size của bạn</span>
                </h3>
                <p class="size-prod--ct__desc">Tìm size vừa vặn với bạn</p>
                <div class="size-prod--ct__list">
                    <div class="size-prod--ct__item">
                        <a href="#" class="d-flex">
                            <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/assets/size-box.png"
                                alt="size box" />
                            <div class="size-prod--ct__item--text">
                                <h4>TOPS</h4>
                                <p>Size recommends of jacket, tshirt...</p>
                            </div>
                        </a>
                    </div>
                    <div class="size-prod--ct__item">
                        <a href="#" class="d-flex">
                            <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/assets/size-box.png"
                                alt="size box" />
                            <div class="size-prod--ct__item--text">
                                <h4>TOPS</h4>
                                <p>Size recommends of jacket, tshirt...</p>
                            </div>
                        </a>
                    </div>
                    <div class="size-prod--ct__item">
                        <a href="#" class="d-flex">
                            <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/assets/size-box.png"
                                alt="size box" />
                            <div class="size-prod--ct__item--text">
                                <h4>TOPS</h4>
                                <p>Size recommends of jacket, tshirt...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="action-close">
                    <i class="icon-ic_close"></i>
                </div>
            </div>
        </div>
    </div>

</body>


</html>