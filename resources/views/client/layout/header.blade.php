<header id="header" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
    <div class="container d-flex">
        <div class="site-brand">
            <a href="{{ route('client.listProductHome') }}"><img
                    src="{{asset('../assets_client/images/pro/logo_tproject.png')}}" alt="T - Project"
                    style="width: 250px; height: 50px; object-fit: cover;" /></a>
        </div>
        <nav class="main-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="menu">
                <li>
                    <a href="javascript:void(0)">Áo</a>
                    <ul class="sub-menu">
                        <div class="sub-menu-content">
                            <div class="list-submenu">
                                <span class="submenu-title">Danh mục</span>
                                <ul>
                                    <li>
                                        <a href="{{ route('client.home.allProduct') }}">Tất cả sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/ao-so-mi-nam.html">Áo sơ mi</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/ao-thun.html">Áo thun</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/polo.html">Polo</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/ao-khoac.html">Áo khoác</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-submenu fit-menu">
                                <span class="submenu-title">Shop by fit</span>
                                <ul>
                                    <li><a href="danh-muc/ao-regular-fit.html">Regular Fit</a></li>
                                    <li><a href="danh-muc/ao-slim-fit.html">Slim Fit</a></li>
                                    <li><a href="danh-muc/ao-relaxed-fit.html">Relaxed Fit</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">QUẦN</a>
                    <ul class="sub-menu">
                        <div class="sub-menu-content">
                            <div class="list-submenu">
                                <span class="submenu-title">Danh mục</span>
                                <ul>
                                    <li>
                                        <a href="danh-muc/tat-ca-sp-quan.html">Tất cả sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/quan-khaki.html">Quần Khaki</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/quan-tay.html">Quần T&acirc;y</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/jeans.html">Quần Jeans</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/shorts.html">Quần Shorts</a>
                                    </li>
                                    <li>
                                        <a href="danh-muc/quan-Jogger.html">Quần Jogger</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="list-submenu fit-menu">
                                <span class="submenu-title">Shop by fit</span>
                                <ul>
                                    <li><a href="danh-muc/quan-regular-fit.html">Regular Fit</a></li>
                                    <li><a href="danh-muc/quan-slim-fit.html">Slim Fit</a></li>
                                    <li><a href="danh-muc/quan-relaxed-fit.html">Relaxed Fit</a></li>
                                </ul>
                            </div>
                            <!-- <div class="img-submenu">
                                <div class="img-submenu-items">
                                    <img src="../pubcdn.ivymoda.com/files/news/2023/10/31/264a52ba6af77e61c2103108757c7e89.jpg"
                                        alt="" class="lazy" />
                                    <span class="img-submenu--title"></span>
                                    <a href="san-pham/dalio-trouser-quan-tay-cuc-lech-ms-22e3990-5399.html"
                                        class="btn btn-discover">Kh&aacute;m ph&aacute; ngay</a>
                                </div>
                                <div class="img-submenu-items">
                                    <img src="../pubcdn.ivymoda.com/files/news/2024/03/13/8790b749b7e2c12138fe2cfebd31aed6.jpg"
                                        alt="" class="lazy" />
                                    <span class="img-submenu--title"></span>
                                    <a href="https://s2.metagent.vn/san-pham/quan-khaki-regular-tui-hop-ms-20e4197-5748"
                                        class="btn btn-discover">Kh&aacute;m ph&aacute; ngay</a>
                                </div>
                            </div> -->
                        </div>
                    </ul>
                </li>
                <li>
                    <a href="danh-muc/phu-kien.html">
                        Phụ kiện
                    </a>
                </li>
                <li class="menu-custom">
                    <a href="javascript:void(0)">Blog</a>
                    <ul class="sub-menu sub-menu-collection sub-menu-about">
                        <li>
                            <a href="blog/tin-tuc.html">Tin tức</a>
                        </li>
                        <li>
                            <a href="blog/blog-chia-se.html">Blog chia sẻ</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-custom">
                    <a href="javascript:void(0)">VỀ CHÚNG TÔI</a>
                    <ul class="sub-menu sub-menu-collection sub-menu-about">
                        <li>
                            <a href="thong-tin/gioi-thieu.html">Về T-Project</a>
                        </li>
                        <li>
                            <a href="thong-tin/chinh-sach-khach-hang-than-thiet.html">Chính sách thẻ thành
                                viên</a>
                        </li>
                        <li>
                            <a href="thong-tin/chinh-sach-bao-hanh.html">Chính sách bảo hành</a>
                        </li>
                        <li>
                            <a href="thong-tin/chinh-sach-doi-tra.html">Chính sách đổi trả</a>
                        </li>
                        <li>
                            <a href="thong-tin/chinh-sach-giao-nhan-van-chuyen.html">Chính sách giao nhận vận
                                chuyển</a>
                        </li>
                        <li>
                            <a href="he-thong-cua-hang.html">Hệ thống cửa hàng</a>
                        </li>
                        <li>
                            <a href="thong-tin/hoi-dap.html">Q&A</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sub-mobile-menu">
                <div class="box-action">
                    <a href="khach-hang/dang-nhap.html" class="action-login">Đăng nhập</a>
                </div>
                <ul class="menu-mb">
                    <li>
                        <a href="javascript:void(0)">Supima</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="https://s2.metagent.vn/landingpage/supima">
                                    Kh&aacute;m ph&aacute; Meta SUPIMA
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Áo</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="danh-muc/ao-all.html">
                                    Tất cả sản phẩm
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/ao-so-mi-nam.html">
                                    Áo sơ mi
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/ao-thun.html">
                                    Áo thun
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/polo.html">
                                    Polo
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/ao-khoac.html">
                                    Áo khoác
                                </a>
                            </li>
                            <li><a href="danh-muc/ao-regular-fit.html">Regular Fit</a></li>
                            <li><a href="danh-muc/ao-slim-fit.html">Slim Fit</a></li>
                            <li><a href="danh-muc/ao-relaxed-fit.html">Relaxed Fit</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">QUẦN</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="danh-muc/tat-ca-sp-quan.html">
                                    Tất cả sản phẩm
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/quan-khaki.html">
                                    Quần Khaki
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/quan-tay.html">
                                    Quần T&acirc;y
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/jeans.html">
                                    Quần Jeans
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/shorts.html">
                                    Quần Shorts
                                </a>
                            </li>
                            <li>
                                <a href="danh-muc/quan-Jogger.html">
                                    Quần Jogger
                                </a>
                            </li>
                            <li><a href="danh-muc/quan-regular-fit.html">Regular Fit</a></li>
                            <li><a href="danh-muc/quan-slim-fit.html">Slim Fit</a></li>
                            <li><a href="danh-muc/quan-relaxed-fit.html">Relaxed Fit</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">SALE SUMMER</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="danh-muc/mua-1-tang-1-250724.html" style="color: #FF0000">
                                    MUA 1 TẶNG 1
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="danh-muc/phu-kien.html">Phụ kiện</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Bộ sưu tập</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="lookbook/on-the-road-12.html">On the road</a>
                            </li>
                            <li>
                                <a href="lookbook/energy-recharge-11.html">Energy Recharge</a>
                            </li>
                            <li>
                                <a href="lookbook/simple-pleasure-7.html">Simple Pleasure</a>
                            </li>
                            <li>
                                <a href="lookbook/floating-light-8.html">Floating Light</a>
                            </li>
                            <li>
                                <a href="lookbook/icy-summer-5.html">ICY Summer</a>
                            </li>
                            <li>
                                <a href="lookbook/the-seasons-symphony-4.html">The Seasons Symphony</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="blog/tin-tuc.html">Tin tức</a>
                            </li>
                            <li>
                                <a href="blog/blog-chia-se.html">Blog chia sẻ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Về chúng tôi</a>
                        <ul class="sub-menu-mb">
                            <li>
                                <a href="thong-tin/gioi-thieu.html">Về Metagent</a>
                            </li>
                            <li>
                                <a href="thong-tin/chinh-sach-khach-hang-than-thiet.html">Chính sách thẻ thành
                                    viên</a>
                            </li>
                            <li>
                                <a href="thong-tin/chinh-sach-bao-hanh.html">Chính sách bảo hành</a>
                            </li>
                            <li>
                                <a href="thong-tin/chinh-sach-doi-tra.html">Chính sách đổi trả</a>
                            </li>
                            <li>
                                <a href="thong-tin/chinh-sach-giao-nhan-van-chuyen.html">Chính sách giao nhận
                                    vận chuyển</a>
                            </li>
                            <li>
                                <a href="he-thong-cua-hang.html">Hệ thống cửa hàng</a>
                            </li>
                            <li>
                                <a href="thong-tin/hoi-dap.html">Q&A</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="close-menu"><i class="icon-ic_close"></i></div>
            </div>
        </nav>
        <!-- .main-menu -->

        <div class="right-header">
            <form enctype="application/x-www-form-urlencoded" method="get" action="" name="frm_search"
                class="search-form">
                <span class="icon-search"><i class="icon-search-meta"></i></span>
                <div class="search-form-hd-content">
                    <div class="search-block-input">
                        <input type="search" id="search-quick" name="q" placeholder="Tìm kiếm" autocomplete="off" />
                        <button class="submit"><i class="icon-search-meta"></i></button>
                        <i class="icon-ic_close search-form-close"></i>
                    </div>
                    <div class="quick-search">
                        <div class="container">
                            <h3>Gợi ý cho bạn</h3>
                            <ul class="external-directory">
                                <li>
                                    <h4>
                                        <i class="icofont-thin-right"></i>
                                        Áo hoodie
                                    </h4>
                                </li>
                                <li>
                                    <h4>
                                        <i class="icofont-thin-right"></i>
                                        Áo thun
                                    </h4>
                                </li>
                                <li>
                                    <h4>
                                        <i class="icofont-thin-right"></i>
                                        Áo khoác phao
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="suggest-search"></div>
                    <div class="overlay-quick-search"></div>
                </div>
            </form>

            <div class="header-actions">
                @if (Auth::check())
                    <div class="item wallet item-scoll-left item-account-ct">
                        <a href="javascript:void(0)" class="icon" aria-label="Customer"><i class="icon-user-meta"></i></a>
                        <div class="sub-action">
                            <div class="top-action">
                                <h3>Tài khoản của tôi</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{route('client.cart.infoUser')}}"><i
                                            class="icon-ic_avatar-1"></i>Thông tin tài khoản</a>
                                </li>
                                <li>
                                    <a href="https://metagent.vn/khach-hang/quan-ly-don-hang"><i
                                            class="icon-ic_reload"></i>Quản lý đơn hàng</a>
                                </li>
                                @if (Auth::user()->role == '1')
                                    <li>
                                        <a href="{{ Route('admin.dashboard') }}"><i class="icon-logout"></i>Quản lý ADMIN</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('client.authen.logout') }}"><i class="icon-logout"></i>Đăng
                                        xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="item wallet item-scoll-left item-account-ct">
                        <a href="{{ Route('client.authen.login') }}" aria-label="Customer" class="icon"
                            onclick="window.location.href='{{ Route('client.authen.login') }}';"><i
                                class="icon-user-meta"></i></a>
                    </div>
                @endif
                <div class="item item-cart wallet item-scoll-left">
                    <a class="icon" href="{{ Route('client.cart.viewCart') }}"aria-label="Customer" class="icon"
                    onclick="window.location.href='{{ Route('client.cart.viewCart') }}';">
                        <i class="icon-bag-meta"></i>
                        <span class="number-cart"></span>
                    </a>
                    <div class="sub-action sub-action-cart" id="cart-aside">
                        <!-- .sub-action-inner-->
                    </div>
                </div>

            </div>

        </div>
        <!-- .right-header -->
    </div>
</header>