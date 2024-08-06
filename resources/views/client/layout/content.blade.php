@extends('client.layout.default')

@section('title')
@parent
Trang chủ
@endsection

@section('content')

<main id="main" class="site-main">
    <!-- SLIDE  -->
    <section class="home-banner bg-before bg-before_02 mg-bt-64">
        <div class="slider-banner owl-carousel">
            <div class="item-banner">
                <a href="#">
                    <img src="{{asset('../assets_client/images/pro/banner.jpg')}}" alt="slider" class="banner-pc" />
                    <div class="info-banner-home-ct">
                        <h2 class="title-banner-home"></h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="banner__number-nav">
            <span class="banner__number"></span>
            <span class="banner__hori">/</span>
            <span class="banner__count"></span>
        </div>
    </section>


    <!-- NEW ARRIVAL  -->
    <!-- .home-sale-prod -->
    <section class="home-sale-prod product__ct--content mg-bt-64">
        <div class="container">
            <div class="top__content-prod">
                <h3 class="title-section">
                    <span class="title-gradient">New Arrival</span>
                </h3>
            </div>
            <div class="exclusive-tabs">
                <div class="pro__general slider__pa_nav owl-carousel">
                    @foreach ($listProductHome as $key => $value)
                        <div class="item">
                            <div class="item-cat-product">
                                <div class="product">
                                    <div class="thumb-product">
                                        <a href="#">
                                            <img src="{{ asset($value->mainImage->image_url) }}" alt="Hinh-anh"
                                                class="lazy" />
                                        </a>
                                        <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5961">Mua
                                            Ngay</button>
                                        <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5961">
                                            <i class="icon-bag-meta"></i>
                                        </button>
                                    </div>
                                    <div class="info-product">
                                        <h3 class="title-product">
                                            <a href="{{ route('client.home.detailProduct') }}?idProduct={{ $value->id }}">{{ $value->ten_sp }}</a>
                                        </h3>
                                        <div class="price-product">
                                            <ins>
                                                {{ number_format($value->giam_gia, 0, ',', '.') . ' đ' }}
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- .End home-sale-prod -->

    <!-- BRILLIANT SUMMER  -->
    <section class="about-prod-block about-prod-block__bg mg-bt-64">
        <div class="about-prod-block__content d-flex">
            <div class="about-prod-block--left"
                style="background-image: url({{asset('../assets_client/images/pro/files/news/2024/04/03/dbc9fb083fabfec06c6269b6de245259.jpg')}});">
                <div class="about-prod-block--left__content">
                    <span class="img-block-text__name">
                    </span>
                    <h3 class="about-prod--title">
                        META SUPIMA
                    </h3>
                    <a href="https://s2.metagent.vn/landingpage/supima" class="btn btn-buy-now ">Khám phá
                        ngay</a>
                </div>
            </div>
            <div class="about-prod-block--right">
                <div class="pro__general about-prod-block-slider owl-carousel">
                    <div class="item">
                        <div class="item-cat-product">
                            <div class="product">
                                <div class="info-attr--pro">
                                    <div class="info-ticket info-ticket--sale">Sale -30%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5744" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/ao-thun-supima-regular-chu-kieu-ms-57e4185-5744.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/5baa0899317b6d9751f88e72b9139d38.jpg"
                                            alt="Áo thun Supima Regular chữ kiểu MS 57E4185" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/76d1d202bafae2e323b4598ae14d8eb5.jpg"
                                            alt="Áo thun Supima Regular chữ kiểu MS 57E4185" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5744">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5744">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/ao-thun-supima-regular-chu-kieu-ms-57e4185-5744.html">Áo
                                            thun Supima Regular chữ kiểu MS 57E4185</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>489.300đ</ins>
                                        <del>699.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/720e7810a6b8ad5182104594a22fc70b.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/244913e21e84a96bafb9948a6c8fa312.jpg"
                                                data-product-id="5743"
                                                data-product-url="https://metagent.vn/san-pham/ao-thun-supima-regular-chu-kieu-ms-57e4185-5743"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/002.png"
                                                    alt="002" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/5baa0899317b6d9751f88e72b9139d38.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/76d1d202bafae2e323b4598ae14d8eb5.JPG"
                                                data-product-id="5744"
                                                data-product-url="https://metagent.vn/san-pham/ao-thun-supima-regular-chu-kieu-ms-57e4185-5744"
                                                class="checked ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/046.png"
                                                    alt="046" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5744" data-type="0">
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
                                    <div class="info-ticket info-ticket--sale">Sale -30%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5561" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/ao-theu-the-ordinary-supima-ms-57e3932-5561.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2023/07/26/f283d75b7f17a15f14f87ffd45ab9ed3.jpg"
                                            alt="Áo thêu The Ordinary Supima MS 57E3932" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2023/07/26/9129c3491aa2da86a5156885a464eade.jpg"
                                            alt="Áo thêu The Ordinary Supima MS 57E3932" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5561">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5561">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/ao-theu-the-ordinary-supima-ms-57e3932-5561.html">Áo
                                            thêu The Ordinary Supima MS 57E3932</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>525.000đ</ins>
                                        <del>750.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/26/f283d75b7f17a15f14f87ffd45ab9ed3.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/26/9129c3491aa2da86a5156885a464eade.JPG"
                                                data-product-id="5561"
                                                data-product-url="https://metagent.vn/san-pham/ao-theu-the-ordinary-supima-ms-57e3932-5561"
                                                class="checked bg-light">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/085031e126b0fdbc976c77f000abc7e5.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/32ebd1d3fe009555c0d7e610ce5e87f3.jpg"
                                                data-product-id="5562"
                                                data-product-url="https://metagent.vn/san-pham/ao-theu-the-ordinary-supima-ms-57e3932-5562"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/008.png"
                                                    alt="008" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5561" data-type="0">
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
                                    <div class="info-ticket info-ticket--sale">Sale -30%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5512" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/ao-supima-metagent-basic-ms-57e3929-5512.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/03/13/691de3551d97a9c4612ee6476e7228a7.jpg"
                                            alt="Áo Supima Metagent basic MS 57E3929" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/76460a7cd3ee8ff4a8ce68ad1f8a38f8.jpg"
                                            alt="Áo Supima Metagent basic MS 57E3929" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5512">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5512">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/ao-supima-metagent-basic-ms-57e3929-5512.html">Áo
                                            Supima Metagent basic MS 57E3929</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>489.300đ</ins>
                                        <del>699.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/03/13/691de3551d97a9c4612ee6476e7228a7.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/76460a7cd3ee8ff4a8ce68ad1f8a38f8.jpg"
                                                data-product-id="5512"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5512"
                                                class="checked bg-light">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/17/83495fd2fd56599d50e5512526b5363c.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/17/14bfaed08e2ef4c9570d990ff436c503.JPG"
                                                data-product-id="5513"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5513"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/002.png"
                                                    alt="002" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/16/15d23cf1dc8e6072c05af9bd45e9f381.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/16/eac767a63b10a96c0f4a8585f743d51d.JPG"
                                                data-product-id="5514"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5514"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/008.png"
                                                    alt="008" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/ed4359e886a5e7c81d733eeb0e6f3f2a.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/3761600250a27a20ec9efc29271d3f93.jpg"
                                                data-product-id="5515"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5515"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/036.png"
                                                    alt="036" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/03/12/0708e81b94eabdb7c363e906cfa9353d.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/03/12/024b4fdd8e44b6da41f120cfc5a5f07b.JPG"
                                                data-product-id="5516"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5516"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/038.png"
                                                    alt="038" class="lazy" />
                                            </li>
                                            <span class="widen">+4 màu</span>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/16/1430d28d8819c7ebb8a891c4b066277d.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/16/a0f1efb708161120762e2763dde64afa.JPG"
                                                data-product-id="5517"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5517"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/046.png"
                                                    alt="046" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/05/06/825e8dc284ee206a96f1fb49c1047607.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/05/06/3b87d289308bfdf448aacf88268514e6.JPG"
                                                data-product-id="5567"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5567"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/049.png"
                                                    alt="049" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/17/a7a95688a8716daca41bd14cc56431ef.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/17/e5df2ab252ac30388bc36e5e28d87051.jpg"
                                                data-product-id="5911"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5911"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/048.png"
                                                    alt="048" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/12/3aff5692895472aac155ab8fcc88c6db.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/12/dfd0c2e7a53eb9904613cfb7e3d5ac89.jpg"
                                                data-product-id="5912"
                                                data-product-url="https://metagent.vn/san-pham/ao-supima-metagent-basic-ms-57e3929-5912"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/052.png"
                                                    alt="052" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5512" data-type="0">
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
                                    <div class="info-ticket info-ticket--sale">Sale -30%</div>
                                    <div class="info-size d-none">
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5537" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/ao-thun-supima-sailing-boat-ms-57e3925-5537.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2023/07/17/5be04d9a0932f8aa233cdeb131e624d8.jpg"
                                            alt="Áo thun Supima Sailing boat MS 57E3925" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2023/07/17/a0113d00cd904fe4e0fd4aa9480bd33e.jpg"
                                            alt="Áo thun Supima Sailing boat MS 57E3925" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5537">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5537">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/ao-thun-supima-sailing-boat-ms-57e3925-5537.html">Áo
                                            thun Supima Sailing boat MS 57E3925</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>525.000đ</ins>
                                        <del>750.000đ</del>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/17/5be04d9a0932f8aa233cdeb131e624d8.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/17/a0113d00cd904fe4e0fd4aa9480bd33e.JPG"
                                                data-product-id="5537"
                                                data-product-url="https://metagent.vn/san-pham/ao-thun-supima-sailing-boat-ms-57e3925-5537"
                                                class="checked bg-light">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5537" data-type="0">
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
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5732" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5732.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/224c8e2544db264ec33d71be2da46cb3.jpg"
                                            alt="Áo polo Regular phối màu MS 57E4210" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/4f663edc98afe6c4ba27ca11267a29b3.jpg"
                                            alt="Áo polo Regular phối màu MS 57E4210" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5732">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5732">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5732.html">Áo polo
                                            Regular phối màu MS 57E4210</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>890.000đ</ins>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/224c8e2544db264ec33d71be2da46cb3.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/4f663edc98afe6c4ba27ca11267a29b3.jpg"
                                                data-product-id="5732"
                                                data-product-url="https://metagent.vn/san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5732"
                                                class="checked bg-light">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/cdc6552bb8332a3c8349a5ca0662b22b.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/d307f0ed469723852a3ea10ab71a5b29.JPG"
                                                data-product-id="5733"
                                                data-product-url="https://metagent.vn/san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5733"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/025.png"
                                                    alt="025" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5732" data-type="0">
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
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5733" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5733.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/cdc6552bb8332a3c8349a5ca0662b22b.jpg"
                                            alt="Áo polo Regular phối màu MS 57E4210" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/d307f0ed469723852a3ea10ab71a5b29.jpg"
                                            alt="Áo polo Regular phối màu MS 57E4210" class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5733">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5733">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5733.html">Áo polo
                                            Regular phối màu MS 57E4210</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>890.000đ</ins>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/224c8e2544db264ec33d71be2da46cb3.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/01/06/4f663edc98afe6c4ba27ca11267a29b3.jpg"
                                                data-product-id="5732"
                                                data-product-url="https://metagent.vn/san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5732"
                                                class=" bg-light">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/001.png"
                                                    alt="001" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/cdc6552bb8332a3c8349a5ca0662b22b.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/d307f0ed469723852a3ea10ab71a5b29.JPG"
                                                data-product-id="5733"
                                                data-product-url="https://metagent.vn/san-pham/ao-polo-regular-phoi-mau-ms-57e4210-5733"
                                                class="checked ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/025.png"
                                                    alt="025" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5733" data-type="0">
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
                                        <img src="https://pubcdn.ivymoda.com/metagent/assets_client/images/icon-svg/TShirt.svg"
                                            alt="size">S
                                    </div>
                                </div>
                                <div class="favourite" data-product-id="5540" data-type="0">
                                    <i class="icon-ic_heart"></i>
                                    <span class="title-att-favo">SP yêu thích</span>
                                </div>
                                <div class="thumb-product">
                                    <a href="san-pham/devlin-polo-ao-polo-supima-co-ke-vien-ms-57e3882-5540.html">
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/7f02ad32ad550a0789a215867e62e6fa.jpg"
                                            alt="Devlin Polo - Áo Polo Supima cổ kẻ viền MS 57E3882" class="lazy" />
                                        <img src="../pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/51d4d9d151f3324d77353e40c208d789.jpg"
                                            alt="Devlin Polo - Áo Polo Supima cổ kẻ viền MS 57E3882"
                                            class="hover-img lazy" />
                                    </a>
                                    <button class="btn btn-quick-shop quick-shop-pc" data-product-id="5540">Mua
                                        Ngay</button>
                                    <button class="btn btn-quick-shop quick-shop-mb" data-product-id="5540">
                                        <i class="icon-bag-meta"></i>
                                    </button>
                                </div>
                                <div class="info-product">
                                    <h3 class="title-product">
                                        <a href="san-pham/devlin-polo-ao-polo-supima-co-ke-vien-ms-57e3882-5540.html">Devlin
                                            Polo - Áo Polo Supima cổ kẻ viền MS 57E3882</a>
                                    </h3>
                                    <div class="price-product">
                                        <ins>890.000đ</ins>
                                    </div>
                                    <div class="list-color">
                                        <ul>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/7f02ad32ad550a0789a215867e62e6fa.JPG"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/04/22/51d4d9d151f3324d77353e40c208d789.JPG"
                                                data-product-id="5540"
                                                data-product-url="https://metagent.vn/san-pham/devlin-polo-ao-polo-supima-co-ke-vien-ms-57e3882-5540"
                                                class="checked ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/003.png"
                                                    alt="003" class="lazy" />
                                            </li>
                                            <li data-img-front="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/8a129885f484f56a6202ee4d2a7a6ca3.jpg"
                                                data-img-back="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/08/09/0f529260442fa1729c2c840f9e2ce68b.jpg"
                                                data-product-id="5541"
                                                data-product-url="https://metagent.vn/san-pham/devlin-polo-ao-polo-supima-co-ke-vien-ms-57e3882-5541"
                                                class=" ">
                                                <img src="../pubcdn.ivymoda.com/metagent/assets_client/images/color/049.png"
                                                    alt="049" class="lazy" />
                                            </li>
                                            <span class="collapse">thu gọn</span>
                                        </ul>
                                        <div class="favourite" data-product-id="5540" data-type="0">
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
        </div>
    </section>
</main>

@endsection