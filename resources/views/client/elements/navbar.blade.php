<div class="header-top">
    <div class="container">
        <div class="header-left">
        </div><!-- End .header-left -->
        @if (session()->get('infouser') == null)
            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>

                            <li class="header-dropdown"><a href="#signin-modal" data-toggle="modal">Đăng nhập /
                                    Đăng ký</a></li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        @else
            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <ul>
                            <li class="header-dropdown"><a href="/profile">{{ session()->get('infouser')->hoTen }}</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        @endif




    </div><!-- End .container -->
</div><!-- End .header-top -->

<div class="header-middle">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>

            <a href="/" class="logo">
                <img src={{ URL::asset('clienttemplate/assets/images/demos/demo-4/logo.png') }} alt="Molla Logo"
                    width="105" height="25">
            </a>
        </div><!-- End .header-left -->

        <div class="header-center">
            <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper search-wrapper-wide">
                        <label for="q" class="sr-only">Tìm kiếm</label>
                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        <input type="search" class="form-control" name="q" id="q" placeholder="Tìm kiếm ..." required>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div><!-- End .header-search -->
        </div>

        <div class="header-right">
            <div class="dropdown compare-dropdown">

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" data-display="static">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">{{ Cart::count() }}</span>
                        </div>
                        <p>Giỏ hàng</p>
                    </a>




                    @if (Cart::count())
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                @foreach (Cart::content() as $item)
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">{{ $item->name }}</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">{{ $item->qty }}</span>
                                                x {{ $item->price }}
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">

                                                <img src={{ URL::asset('clienttemplate/assets/images/product/' . $item->options[0]) }}
                                                    alt="product">
                                            </a>
                                        </figure>
                                        <a href="/cart/remove/{{ $item->rowId }}" class="btn-remove"
                                            title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                @endforeach



                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Tổng cộng</span>

                                <span class="cart-total-price">{{ Cart::total() }}</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="/cart" class="btn btn-primary">Giỏ hàng</a>
                                <a href="/checkout" class="btn btn-outline-primary-2"><span>Thanh
                                        toán</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    @endif
                    @if (!Cart::count())
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products text-center">
                                Chưa có sản phẩm trong giỏ hàng
                            </div><!-- End .cart-product -->

                        </div><!-- End .dropdown-menu -->
                    @endif

                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">

            <nav class="main-nav">
                <ul class="menu sf-arrows">
                    <li class="megamenu-container active">
                        <a href="/" class="sf-with-ul">Trang chủ</a>
                    </li>

                    @foreach ($categoriesItems as $item)
                        <li>
                            <a href="/category/{{ $item->idLoai }}" class="sf-with-ul">
                                {{ $item->tenLoai }}</a>
                        </li>
                    @endforeach


                </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->


        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
