@extends('client.main')

@section('content')



    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
            data-owl-options='{
                                                                                                                                                                                                                                                                                    "dots": true,
                                                                                                                                                                                                                                                                                    "nav": false, 
                                                                                                                                                                                                                                                                                    "responsive": {
                                                                                                                                                                                                                                                                                        "1200": {
                                                                                                                                                                                                                                                                                            "nav": true,
                                                                                                                                                                                                                                                                                            "dots": false
                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                }'>
            <div class="intro-slide"
                style="background-image: url(clienttemplate/assets/images/demos/demo-4/slider/slide-1.png);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-third">S???n ph???m gi???m gi?? s???c</h3>
                            <!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1>
                            <!-- End .intro-title -->


                            <div class="intro-price">
                                <sup class="intro-old-price">9 tri???u</sup>
                                <span class="text-third">
                                    6 tri???u 999k
                                </span>
                            </div><!-- End .intro-price -->

                            <a href="category" class="btn btn-primary btn-round">
                                <span>Xem ngay</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-lg-11 offset-lg-1 -->
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                style="background-image: url(clienttemplate/assets/images/demos/demo-4/slider/slide-2.png);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-primary">S???n ph???m m???i</h3>
                            <!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Tai nghe</h1>
                            <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->


                            <div class="intro-price">
                                <sup>Ngay h??m nay:</sup>
                                <span class="text-primary">
                                    1 tri???u 999k
                                </span>
                            </div><!-- End .intro-price -->

                            <a href="category" class="btn btn-primary btn-round">
                                <span>Mua ngay</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-md-6 offset-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="container">
        <h2 class="title text-center mb-4">Danh m???c s???n ph???m</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">
                @foreach ($categoriesItems as $item)
                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="/category/{{ $item->idLoai }}" class="cat-block">
                            <figure>
                                <span>
                                    <img src={{ URL::asset('clienttemplate/assets/images/categories/' . $item->image) }}
                                        alt="Category image">
                                </span>
                            </figure>

                            <h3 class="cat-block-title">{{ $item->tenLoai }}</h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->
                @endforeach


            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="clienttemplate/assets/images/demos/demo-4/banners/iphone.jpg" alt="Banner">
                    </a>
                </div><!-- End .banner -->
            </div><!-- End .col-md-4 -->

            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="clienttemplate/assets/images/demos/demo-4/banners/dongho.jpg" alt="Banner">
                    </a>


                </div><!-- End .banner -->
            </div><!-- End .col-md-4 -->

            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="clienttemplate/assets/images/demos/demo-4/banners/sacduphong.jpg" alt="Banner">
                    </a>
                </div><!-- End .banner -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        @foreach ($categoriesItems as $categoryItem)

            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">{{ $categoryItem->tenLoai }}</h2><!-- End .title -->

                </div><!-- End .heading-left -->

            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel just-action-icons-sm">
                <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                                                                                                                                                                                                                                                                            "nav": true, 
                                                                                                                                                                                                                                                                                            "dots": true,
                                                                                                                                                                                                                                                                                            "margin": 20,
                                                                                                                                                                                                                                                                                            "loop": false,
                                                                                                                                                                                                                                                                                            "responsive": {
                                                                                                                                                                                                                                                                                                "0": {
                                                                                                                                                                                                                                                                                                    "items":2
                                                                                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                                                                                "480": {
                                                                                                                                                                                                                                                                                                    "items":2
                                                                                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                                                                                "768": {
                                                                                                                                                                                                                                                                                                    "items":3
                                                                                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                                                                                "992": {
                                                                                                                                                                                                                                                                                                    "items":4
                                                                                                                                                                                                                                                                                                },
                                                                                                                                                                                                                                                                                                "1200": {
                                                                                                                                                                                                                                                                                                    "items":5
                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                        }'>

                        @foreach ($productItems as $productItem)

                            @if ($categoryItem->idLoai == $productItem->idLoai)
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="detail/{{ $productItem->idSP }}">
                                            <img src="clienttemplate/assets/images/product/{{ $productItem->hinhanh }}"
                                                alt="Product image" class="product-image">
                                        </a>


                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                    cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $categoryItem->tenLoai }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="detail">{{ $productItem->tenSP }}</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            {{ $productItem->gia }}
                                        </div><!-- End .product-price -->

                                    </div><!-- End .product-body -->


                                </div><!-- End .product -->

                            @endif


                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
        @endforeach

    </div><!-- End .container -->

    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark mb-3">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h2 class="icon-box-title mb-2">Mi???n ph?? v???n chuy???n</h2>
                            <p>mi???n ph?? v???n chuy???n cho c??c ????n h??ng thu???c khu v???c th??nh ph??? ho???c ????n h??ng tr???
                                gi?? tr??n 30.000.000 VN??</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-4">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark mb-3">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h2 class="icon-box-title mb-2">Ho??n tr??? h??ng</h2>
                            <p>cho ph??p ?????i tr??? h??ng trong v??ng 7 ng??y k??? t??? ng??y xu???t h??a ????n n???u s???n ph???m c??
                                l???i c???a nh?? s???n xu???t</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-4">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark mb-3">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h2 class="icon-box-title mb-2">Cam k???t ch??nh h??ng</h2><!-- End .icon-box-title -->
                            <p>n???u ph??t hi???n h??ng gi???, c?? h??a ????n th??nh to??n, c???a h??ng s??? t???ng s???n ph???m kh??ch
                                h??ng mua v?? b???i th?????ng 100% gi?? tr??? ????n h??ng</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->


            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->
@endsection
