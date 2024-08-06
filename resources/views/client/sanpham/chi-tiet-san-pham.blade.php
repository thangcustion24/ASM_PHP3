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
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ" href="">Trang
                        chủ</a></li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" title="Áo Cuban họa tiết kẻ"
                        href="#">{{$product->ten_sp}}</a></li>
            </ol>
        </div>
    </div>

    <div class="product-detail">
        <div class="container">
            <div class="product-detail__content d-flex">
                <div class="product-detail__content--left use-img-pc">
                    <div class="pro__detail--list-img d-flex">
                        <div class="item-cat-product">
                            @foreach($product->images as $key => $value)
                                <img src="{{ asset($value->image_url) }}" alt="hinh-anh" class="lazy"
                                    data-index="{{ $key + 1 }}" />
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="product-detail__conttent--right">
                    <div class="product-detail__information">
                        <h1>{{$product->ten_sp}}</h1>
                        <p style="margin-top: 10px;">Số lượng :
                            <span>{{$product->so_luong}}</span>
                        </p>
                        <div class="product-detail__price" style="margin-top: 0px">
                            <b>{{$product->giam_gia}}</b>
                            <del>{{$product->gia_sp}}</del>
                        </div>
                        <div class="product-detail-divider"></div>
                        <div class="product-detail__color">
                            <h4>Màu sắc: <span>Đen</span> </h4>
                            <div class="product-detail__color__input">
                                <label style="background: url({{ asset('../assets_client/images/color/049.png') }})"
                                    class="">
                                    <a href="#"
                                        onclick="window.location.href='#';">
                                        <input type="radio" name="color" value="049" /><span></span>
                                    </a>
                                </label>
                            </div>
                        </div>
                        <div class="product-detail__size">
                            <div class="product-detail__size__input">
                                <label class="">
                                    <input type="radio" name="size" value="s" data-product-id="4"
                                        data-product-sub-sku="1610E35450170022" data-product-sub-id="84" />
                                    <span>s</span>
                                </label>
                                <label class="">
                                    <input type="radio" name="size" value="m" data-product-id="4"
                                        data-product-sub-sku="1620E35450170022" data-product-sub-id="85" />
                                    <span>m</span>
                                </label>
                                <label class="">
                                    <input type="radio" name="size" value="l" data-product-id="4"
                                        data-product-sub-sku="1630E35450170022" data-product-sub-id="86" />
                                    <span>l</span>
                                </label>
                                <label class="slash">
                                    <input type="radio" name="size" value="xl" data-product-id="4"
                                        data-product-sub-sku="1640E35450170022" data-product-sub-id="87" />
                                    <span>xl</span>
                                </label>
                                <label class="">
                                    <input type="radio" name="size" value="xxl" data-product-id="4"
                                        data-product-sub-sku="1650E35450170022" data-product-sub-id="88" />
                                    <span>xxl</span>
                                </label>
                            </div>
                            <a data-fancybox data-src="#table-size-product" href="javascript:void(0);">
                                <span class="icon-ic_rule-1"></span>
                                <span class="text">Kiểm tra size của bạn</span>
                            </a>
                            <div class="table-size-product" style="display: none" id="table-size-product">
                                <div class="title-table-size">BẢNG TƯ VẤN SIZE</div>
                                <div class="exclusive-tabs">
                                    <div class="exclusive-head">
                                        <ul>
                                            <li class="exclusive-tab active">Nam</li>
                                        </ul>
                                    </div>
                                </div>
                                <table class="table-pc">
                                    <thead>
                                        <tr>
                                            <td class="title-table" colspan="7">
                                                SIZE ÁO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>STT</strong></td>
                                            <td><strong>TÊN GỌI/SIZE</strong></td>
                                            <td><strong>S</strong></td>
                                            <td><strong>M</strong></td>
                                            <td><strong>L</strong></td>
                                            <td><strong>XL</strong></td>
                                            <td><strong>XXL</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cổ</td>
                                            <td>36</td>
                                            <td>38</td>
                                            <td>40</td>
                                            <td>42</td>
                                            <td>44</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vai</td>
                                            <td>44</td>
                                            <td>45</td>
                                            <td>46</td>
                                            <td>47</td>
                                            <td>48</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ngực</td>
                                            <td>90</td>
                                            <td>94</td>
                                            <td>98</td>
                                            <td>102</td>
                                            <td>106</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Eo</td>
                                            <td>88</td>
                                            <td>92</td>
                                            <td>96</td>
                                            <td>100</td>
                                            <td>104</td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td class="title-table" colspan="9">
                                                SIZE QUẦN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>STT</strong></td>
                                            <td><strong>TÊN GỌI/SIZE</strong></td>
                                            <td><strong>S(29)</strong></td>
                                            <td><strong>M(30)</strong></td>
                                            <td><strong>M(2)</strong></td>
                                            <td><strong>L(31)</strong></td>
                                            <td><strong>L(2)</strong></td>
                                            <td><strong>XL(32)</strong></td>
                                            <td><strong>XXL(33)</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Vòng Eo</td>
                                            <td>76</td>
                                            <td>80</td>
                                            <td>84</td>
                                            <td>84</td>
                                            <td>88</td>
                                            <td>88</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vòng Mông</td>
                                            <td>91</td>
                                            <td>95</td>
                                            <td>95</td>
                                            <td>99</td>
                                            <td>99</td>
                                            <td>104</td>
                                            <td>109</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cân nặng (kg)</td>
                                            <td>62 - 68</td>
                                            <td>68 - 70</td>
                                            <td>68 - 70</td>
                                            <td>70 - 74</td>
                                            <td>70 - 74</td>
                                            <td>74 - 78</td>
                                            <td>78 - 82</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Chiều Cao (cm)</td>
                                            <td>162 - 168</td>
                                            <td>168 - 172</td>
                                            <td>168 - 172</td>
                                            <td>172 - 176</td>
                                            <td>172 - 176</td>
                                            <td>176 - 180</td>
                                            <td>180 - 184</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table-mobile">
                                    <thead>
                                        <tr>
                                            <td class="title-table" colspan="5">
                                                SIZE ÁO
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>SIZE</strong></td>
                                            <td><strong>Cổ</strong></td>
                                            <td><strong>Vai</strong></td>
                                            <td><strong>Ngực</strong></td>
                                            <td><strong>Eo</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>S</td>
                                            <td>36</td>
                                            <td>44</td>
                                            <td>90</td>
                                            <td>88</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>38</td>
                                            <td>45</td>
                                            <td>94</td>
                                            <td>92</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>40</td>
                                            <td>46</td>
                                            <td>98</td>
                                            <td>96</td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td>42</td>
                                            <td>47</td>
                                            <td>102</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>XXL</td>
                                            <td>44</td>
                                            <td>48</td>
                                            <td>106</td>
                                            <td>104</td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr>
                                            <td class="title-table" colspan="5">
                                                SIZE QUẦN
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>SIZE</strong></td>
                                            <td><strong>Vòng Eo</strong></td>
                                            <td><strong>Vòng Mông</strong></td>
                                            <td><strong>Cân nặng(kg)</strong></td>
                                            <td>Chiều Cao (cm)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>S(29)</td>
                                            <td>76</td>
                                            <td>91</td>
                                            <td>62-68</td>
                                            <td>162 - 168</td>
                                        </tr>
                                        <tr>
                                            <td>M(30)</td>
                                            <td>80</td>
                                            <td>95</td>
                                            <td>68-70</td>
                                            <td>168</td>
                                        </tr>
                                        <tr>
                                            <td>L(31)</td>
                                            <td>84</td>
                                            <td>99</td>
                                            <td>70-74</td>
                                            <td>172-176</td>
                                        </tr>
                                        <tr>
                                            <td>XL(32)</td>
                                            <td>86</td>
                                            <td>104</td>
                                            <td>74-78</td>
                                            <td>176-180</td>
                                        </tr>
                                        <tr>
                                            <td>XXL(33)</td>
                                            <td>90</td>
                                            <td>109</td>
                                            <td>78-82</td>
                                            <td>180-184</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--<table class="table-pc">
        <thead>
        <tr>
            <td class="title-table" colspan="7">
                SIZE GIÀY DÉP
            </td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>TÊN GỌI/SIZE</strong></td>
            <td><strong>39</strong></td>
            <td><strong>40</strong></td>
            <td><strong>41</strong></td>
            <td><strong>42</strong></td>
            <td><strong>43</strong></td>
            <td><strong>44</strong></td>
        </tr>
        <tr>
            <td>Chiều dài bàn chân</td>
            <td>20,5</td>
            <td>26</td>
            <td>26,9</td>
            <td>27,7</td>
            <td>28,5</td>
            <td>29,4</td>
        </tr>
        </tbody>
    </table>-->
                                <table class="table-mobile">
                                    <thead>
                                        <tr>
                                            <td class="title-table" colspan="5">
                                                SIZE GIÀY
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TÊN GỌI/SIZE</td>
                                            <td>Chiều dài bàn chân</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>39</td>
                                            <td>20,5</td>
                                        </tr>
                                        <tr>
                                            <td>40</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>41</td>
                                            <td>26,9</td>
                                        </tr>
                                        <tr>
                                            <td>42</td>
                                            <td>27,7</td>
                                        </tr>
                                        <tr>
                                            <td>43</td>
                                            <td>28,5</td>
                                        </tr>
                                        <tr>
                                            <td>44</td>
                                            <td>29,4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form action="{{ route('client.cart.addToCart') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="product-detail__quantity">
                                <h4>Số lượng:</h4>
                                <div class="product-detail__quantity-input">
                                    <input type="number" value="1" name="quantity" data-product-id="4" />
                                    <div class="product-detail__quantity--decrease">
                                        -
                                    </div>
                                    <div class="product-detail__quantity--increase">
                                        +
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail__actions">
                                <button class="btn btn--large btn-add-to-cart" data-product-id="4">
                                    Thêm vào giỏ hàng
                                </button>
                                <a href="javascript:void(0)">
                                    <button class="btn btn--large btn--outline purchase" data-product-id="4">
                                        Mua ngay
                                    </button>
                                </a>
                            </div>
                        </form>
                        <div class="product-detail__tab m-2">
                            <div class="product-detail__tab-header">
                                <div class="tab-item">
                                    <h3 class="title">Mô tả</h3>
                                    <div class="tab-content">
                                        {{$product->mo_ta}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- .home-sale-prod -->
    <section class="home-sale-prod product__ct--content mg-bt-64">
        <div class="container">
            <div class="top__content-prod">
                <h3 class="title-section">
                    <span class="title-gradient">Recent View</span>
                </h3>
                <!---->
            </div>
            <div class="exclusive-tabs">
                <div class="pro__general slider__pa_nav owl-carousel">
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket">NEW</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="299" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-ke-ms-16e3553-299.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/10/10/9b8d3e0f908158ca554c200360030958.jpg"
                                            alt="Áo sơ mi kẻ MS 16E3553" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/10/10/9b2561abd3cce9c66ee4beb29b597b12.jpg"
                                            alt="Áo sơ mi kẻ MS 16E3553" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="299">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="299">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-ke-ms-16e3553-299.html">Áo sơ mi kẻ MS 16E3553</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>990.000đ</ins>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/10/10/9b8d3e0f908158ca554c200360030958.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/10/10/9b2561abd3cce9c66ee4beb29b597b12.jpg"
                                                data-product-id="299" data-product-url="ao-so-mi-ke-ms-16e3553-299.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k16.png"
                                                    alt="k16" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="299" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="304" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-304.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/d7e5256b54bfdc2cc6652770bd31fd86.jpg"
                                            alt="Áo sơ mi ngắn tay phối túi MS 16E3618" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/8b9eabb49893a5622b4c12bc3365821a.jpg"
                                            alt="Áo sơ mi ngắn tay phối túi MS 16E3618" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="304">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="304">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-304.html">Áo sơ mi ngắn
                                            tay phối túi MS 16E3618</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>475.000đ</ins>
                                        <del>950.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/baf6b26ccbf677568d0f23dd7674671c.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/a5243d231701bd5d7ecd0ebe29ffeadd.jpg"
                                                data-product-id="303"
                                                data-product-url="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-303.html"
                                                class=" bg-light">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/d7e5256b54bfdc2cc6652770bd31fd86.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/8b9eabb49893a5622b4c12bc3365821a.jpg"
                                                data-product-id="304"
                                                data-product-url="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-304.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/016.png"
                                                    alt="016" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="304" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="303" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-303.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/baf6b26ccbf677568d0f23dd7674671c.jpg"
                                            alt="Áo sơ mi ngắn tay phối túi MS 16E3618" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/a5243d231701bd5d7ecd0ebe29ffeadd.jpg"
                                            alt="Áo sơ mi ngắn tay phối túi MS 16E3618" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="303">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="303">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-303.html">Áo sơ mi ngắn
                                            tay phối túi MS 16E3618</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>475.000đ</ins>
                                        <del>950.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/baf6b26ccbf677568d0f23dd7674671c.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/a5243d231701bd5d7ecd0ebe29ffeadd.jpg"
                                                data-product-id="303"
                                                data-product-url="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-303.html"
                                                class="checked bg-light">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/d7e5256b54bfdc2cc6652770bd31fd86.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2022/11/12/8b9eabb49893a5622b4c12bc3365821a.jpg"
                                                data-product-id="304"
                                                data-product-url="ao-so-mi-ngan-tay-phoi-tui-ms-16e3618-304.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/016.png"
                                                    alt="016" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="303" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket">NEW</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="302" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-ngan-tay-phoi-tui-ms-16e3612-302.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/4fbbcd2f52a251ee0dcae746a20c2500.jpg"
                                            alt="Áo sơ mi ngắn tay phối túi MS 16E3612" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/06290852a3a2953edd157f2829bd20ad.jpg"
                                            alt="Áo sơ mi ngắn tay phối túi MS 16E3612" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="302">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="302">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-ngan-tay-phoi-tui-ms-16e3612-302.html">Áo sơ mi ngắn
                                            tay phối túi MS 16E3612</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>990.000đ</ins>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/4fbbcd2f52a251ee0dcae746a20c2500.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/06290852a3a2953edd157f2829bd20ad.jpg"
                                                data-product-id="302"
                                                data-product-url="ao-so-mi-ngan-tay-phoi-tui-ms-16e3612-302.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/024.png"
                                                    alt="024" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="302" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="856" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-hoa-tiet-ke-vuong-ms-17e3556-856.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/21/a30dfbe0ca211570cc0524e4f118a15f.jpg"
                                            alt="Áo sơ mi họa tiết kẻ vuông MS 17E3556" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/21/b1138a560443ed3b14ad2c19404a430d.jpg"
                                            alt="Áo sơ mi họa tiết kẻ vuông MS 17E3556" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="856">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="856">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-hoa-tiet-ke-vuong-ms-17e3556-856.html">Áo sơ mi họa
                                            tiết kẻ vuông MS 17E3556</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>645.000đ</ins>
                                        <del>1.290.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/18/e19b7e366ac0cb289f022d538419c894.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/18/e60a40ab61d0970b538e6fe284039748.jpg"
                                                data-product-id="855"
                                                data-product-url="ao-so-mi-hoa-tiet-cham-bi-ms-17e3556-855.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k32.png"
                                                    alt="k32" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/21/a30dfbe0ca211570cc0524e4f118a15f.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/21/b1138a560443ed3b14ad2c19404a430d.jpg"
                                                data-product-id="856"
                                                data-product-url="ao-so-mi-hoa-tiet-ke-vuong-ms-17e3556-856.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k41.png"
                                                    alt="k41" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="856" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="855" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-hoa-tiet-cham-bi-ms-17e3556-855.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/18/e19b7e366ac0cb289f022d538419c894.jpg"
                                            alt="Áo sơ mi họa tiết chấm bi MS 17E3556" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/18/e60a40ab61d0970b538e6fe284039748.jpg"
                                            alt="Áo sơ mi họa tiết chấm bi MS 17E3556" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="855">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="855">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-hoa-tiet-cham-bi-ms-17e3556-855.html">Áo sơ mi họa
                                            tiết chấm bi MS 17E3556</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>645.000đ</ins>
                                        <del>1.290.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/18/e19b7e366ac0cb289f022d538419c894.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/18/e60a40ab61d0970b538e6fe284039748.jpg"
                                                data-product-id="855"
                                                data-product-url="ao-so-mi-hoa-tiet-cham-bi-ms-17e3556-855.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k32.png"
                                                    alt="k32" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/21/a30dfbe0ca211570cc0524e4f118a15f.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/21/b1138a560443ed3b14ad2c19404a430d.jpg"
                                                data-product-id="856"
                                                data-product-url="ao-so-mi-hoa-tiet-ke-vuong-ms-17e3556-856.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k41.png"
                                                    alt="k41" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="855" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="846" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-846.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/84fce3e54ab310bdfac004d712e2d5e8.jpg"
                                            alt="Áo sơ mi nam họa tiết caro nhỏ MS 17E3453" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/633d91d15594fdffe0cf0c78e61f070d.jpg"
                                            alt="Áo sơ mi nam họa tiết caro nhỏ MS 17E3453" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="846">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="846">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-846.html">Áo sơ mi
                                            nam họa tiết caro nhỏ MS 17E3453</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>695.000đ</ins>
                                        <del>1.390.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/0799ea9f76eca538478f3bb02be4b5fe.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/4ab9386f201e64d3f71dbdae73256e0e.jpg"
                                                data-product-id="844"
                                                data-product-url="ao-so-mi-trang-dang-regular-fit-ms-17e3453-844.html"
                                                class=" bg-light">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/5d9b1df66fa517b4ae9c3c7e848fec18.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/d8d80809220080ba7b11beddb9b1f0f2.jpg"
                                                data-product-id="845"
                                                data-product-url="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-845.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k01.png"
                                                    alt="k01" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/84fce3e54ab310bdfac004d712e2d5e8.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/633d91d15594fdffe0cf0c78e61f070d.jpg"
                                                data-product-id="846"
                                                data-product-url="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-846.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k16.png"
                                                    alt="k16" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="846" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="845" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-845.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/5d9b1df66fa517b4ae9c3c7e848fec18.jpg"
                                            alt="Áo sơ mi nam họa tiết caro nhỏ MS 17E3453" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/d8d80809220080ba7b11beddb9b1f0f2.jpg"
                                            alt="Áo sơ mi nam họa tiết caro nhỏ MS 17E3453" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="845">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="845">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-845.html">Áo sơ mi
                                            nam họa tiết caro nhỏ MS 17E3453</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>695.000đ</ins>
                                        <del>1.390.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/0799ea9f76eca538478f3bb02be4b5fe.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/4ab9386f201e64d3f71dbdae73256e0e.jpg"
                                                data-product-id="844"
                                                data-product-url="ao-so-mi-trang-dang-regular-fit-ms-17e3453-844.html"
                                                class=" bg-light">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/5d9b1df66fa517b4ae9c3c7e848fec18.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/d8d80809220080ba7b11beddb9b1f0f2.jpg"
                                                data-product-id="845"
                                                data-product-url="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-845.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k01.png"
                                                    alt="k01" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/84fce3e54ab310bdfac004d712e2d5e8.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/633d91d15594fdffe0cf0c78e61f070d.jpg"
                                                data-product-id="846"
                                                data-product-url="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-846.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k16.png"
                                                    alt="k16" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="845" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="844" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-trang-dang-regular-fit-ms-17e3453-844.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/0799ea9f76eca538478f3bb02be4b5fe.jpg"
                                            alt="Áo sơ mi trắng dáng Regular fit MS 17E3453" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/4ab9386f201e64d3f71dbdae73256e0e.jpg"
                                            alt="Áo sơ mi trắng dáng Regular fit MS 17E3453" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="844">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="844">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-trang-dang-regular-fit-ms-17e3453-844.html">Áo sơ mi
                                            trắng dáng Regular fit MS 17E3453</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>695.000đ</ins>
                                        <del>1.390.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/0799ea9f76eca538478f3bb02be4b5fe.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/02/16/4ab9386f201e64d3f71dbdae73256e0e.jpg"
                                                data-product-id="844"
                                                data-product-url="ao-so-mi-trang-dang-regular-fit-ms-17e3453-844.html"
                                                class="checked bg-light">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/5d9b1df66fa517b4ae9c3c7e848fec18.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/04/17/d8d80809220080ba7b11beddb9b1f0f2.jpg"
                                                data-product-id="845"
                                                data-product-url="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-845.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k01.png"
                                                    alt="k01" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/84fce3e54ab310bdfac004d712e2d5e8.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/633d91d15594fdffe0cf0c78e61f070d.jpg"
                                                data-product-id="846"
                                                data-product-url="ao-so-mi-nam-hoa-tiet-caro-nho-ms-17e3453-846.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/k16.png"
                                                    alt="k16" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="844" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -50%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5106" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="ao-so-mi-hoa-tiet-cham-bi-ms-17e3611-5106.html">
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/175fb262f200f2a5c6e70677e7a8c05a.jpg"
                                            alt="Áo sơ mi họa tiết chấm bi MS 17E3611" class="lazy" />
                                        <img src="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/176a025f1defb53758f6a53b73b54c2e.jpg"
                                            alt="Áo sơ mi họa tiết chấm bi MS 17E3611" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5106">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5106">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="ao-so-mi-hoa-tiet-cham-bi-ms-17e3611-5106.html">Áo sơ mi họa
                                            tiết chấm bi MS 17E3611</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>625.000đ</ins>
                                        <del>1.250.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/10/dc9077a875d67cd262984bae6a478990.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/10/135253cc37e26af5f20bc83564212c2f.jpg"
                                                data-product-id="5098"
                                                data-product-url="ao-so-mi-hoa-tiet-cham-bi-ms-17e3611-5098.html"
                                                class=" ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/h16.png"
                                                    alt="h16" class="lazy" />
                                            </li>
                                            <li data-img-front="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/175fb262f200f2a5c6e70677e7a8c05a.jpg"
                                                data-img-back="../../pubcdn.ivymoda.com/files/product/thumab/400/2023/01/17/176a025f1defb53758f6a53b73b54c2e.jpg"
                                                data-product-id="5106"
                                                data-product-url="ao-so-mi-hoa-tiet-cham-bi-ms-17e3611-5106.html"
                                                class="checked ">
                                                <img src="../../pubcdn.ivymoda.com/metagent/assets/images/color/h48.png"
                                                    alt="h48" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5106" data-type="0">
                                            <i class="icon-ic_heart"></i>
                                            <span class="title-att-favo">SP yêu thích</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- exclusive-tabs -->
        </div>
        <!-- .container-->
    </section>
    <!-- .End home-sale-prod -->
</main>

@endsection