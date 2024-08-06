@extends('client.layout.default')

@section('title')
@parent
Trang chủ
@endsection

@section('content')

<main id="main" class="site-main">
    <form name="frm_cat" class="template-product" id="frm_cat" enctype="application/x-www-form-urlencoded" method="get"
        action="#" data-slug="danh-muc/ao-all">
        <div class="breadcrumb breadcrumb-products">
            <div class="container">
                <ol class="breadcrumb__list br-none">
                    <li class="breadcrumb__item"><a class="breadcrumb__link" title="Trang chủ"
                            href="{{ route('client.listProductHome') }}">Trang chủ</a></li>
                    <li class="breadcrumb__item"><a class="breadcrumb__link" title="Tất cả sản phẩm" href="3">Tất cả sản
                            phẩm</a></li>
                </ol>
            </div>
        </div>

        <section class="section-list-products product-page">
            <div class="container">
                <div>
                    <h1 class="title-page"><span class="title-gradient">Hàng mới về</span></h1>
                </div>
                <div class="result-fill mg-bt-21" id="size-prod--ct">
                    <div class="result-filter">
                        <div class="item-filter filter-row open">
                            <span>Bộ lọc <i class="icofont-filter"></i></span>
                        </div>
                        <section class="box-overlay">
                            <form method="GET" action="{{ route('client.home.allProduct') }}">
                                <div class="modal-over"></div>
                                <div class="sidebar-prod sidebar-prod-pc">
                                    <div class="title-close">
                                        <span>Bộ lọc</span>
                                        <span><i class="icofont-close-line"></i></span>
                                    </div>
                                    <ul class="list-side">
                                        <li class="item-side item-side-size">
                                            <h4>Danh mục
                                                <span class="icon-ic_plus"></span><span class="icon-ic_minus"></span>
                                            </h4>
                                            <input type="hidden" name="hid_size" />
                                            <div class="sub-list-side" style="display: none;">
                                                @foreach($categories as $category)
                                                    <label class="item-sub-list po-relative">
                                                        <input type="checkbox" name="category_id[]" class="field-cat"
                                                            value="{{ $category->id }}" {{ in_array($category->id, request('category_id', [])) ? 'checked' : '' }} />
                                                        <span
                                                            class="item-sub-title item-sub-pr ">{{ $category->ten_dm }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </li>
                                    </ul>
                                    <div>
                                        <button type="submit" class="btn btn-apo but_filter_product">Áp dụng</button>
                                    </div>
                                    <div>
                                        <a href="{{ route('client.home.allProduct') }}"
                                            class="btn btn-apo--outline but_filter_remove">Bỏ lọc</a>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <div class="item-filter">
                            <span>Sắp xếp <i class="icon-ic_down"></i></span>
                            <input type="hidden" name="sel_order" value="">
                            <div class="list-number-row">
                                <div class="item-number-row">
                                    <a href="javascript:void(0)" class="sel-order-option" data-value="">Mặc
                                        định</a>
                                </div>
                                <div class="item-number-row">
                                    <a href="javascript:void(0)" class="sel-order-option" data-value="latest">Mới
                                        nhất</a>
                                </div>
                                <div class="item-number-row">
                                    <a href="javascript:void(0)" class="sel-order-option" data-value="best_seller">Được
                                        mua nhiều nhất</a>
                                </div>
                                <div class="item-number-row">
                                    <a href="javascript:void(0)" class="sel-order-option" data-value="favourite">Được
                                        yêu thích nhất</a>
                                </div>
                                <div class="item-number-row">
                                    <a href="javascript:void(0)" class="sel-order-option" data-value="price_desc">Giá:
                                        cao đến thấp</a>
                                </div>
                                <div class="item-number-row">
                                    <a href="javascript:void(0)" class="sel-order-option" data-value="price_asc">Giá:
                                        thấp đến cao</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search__content--ct-slider d-flex">
                    @forelse ($listProductAll as $value)
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
                                            <a href="#">{{ $value->ten_sp }}</a>
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
                    @empty
                        <p>Không có sản phẩm nào.</p>
                    @endforelse
                </div>
                <div class="pagination">
                    <a href="#" class="page-numbers">&laquo;</a><a href="#" class="page-numbers current">1</a><a
                        href="ao-all/283b6.html?dong_sp=&amp;nhom_sp=" class="page-numbers">2</a><a
                        href="ao-all/383b6.html?dong_sp=&amp;nhom_sp=" class="page-numbers">3</a><a
                        href="ao-all/483b6.html?dong_sp=&amp;nhom_sp=" class="page-numbers">4</a><a
                        href="ao-all/583b6.html?dong_sp=&amp;nhom_sp=" class="page-numbers">5</a><a
                        href="ao-all/283b6.html?dong_sp=&amp;nhom_sp=" class="page-numbers">&raquo;</a><a
                        href="ao-all/1483b6.html?dong_sp=&amp;nhom_sp=" class="page-numbers last-page">Trang
                        cuối</a>
                </div>

            </div>
        </section>
    </form>

</main>

@endsection