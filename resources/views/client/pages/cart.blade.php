@extends('client.main')
@section('content')
@section('title', 'Giỏ hàng')
@section('contenttitle', 'danh sách sản phẩm đã thêm')
<div class="page-content">
    @include('client.elements.pagetitle')
    @include('client.elements.notification')
    <div class="cart">
        <div class="container">
            <div class="row">
                <form method="post" action="/cart/update" class="col-lg-9">
                    {{-- @csrf --}}
                    <table class="table table-cart table-mobile">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach (Cart::content() as $item)

                                <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src={{ URL::asset('clienttemplate/assets/images/product/' . $item->options[0]) }}
                                                        alt="Product image">
                                                </a>
                                            </figure>
                                            <h3 class="product-title">
                                                <a href="#">{{ $item->name }}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{ $item->price }}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input name="{{ $item->rowId }}" type="number" class="form-control"
                                                value="{{ $item->qty }}" min="1" max="10" step="1" data-decimals="0"
                                                required>

                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">{{ $item->price * $item->qty }}</td>
                                    <td class="remove-col"> <a href="/cart/remove/{{ $item->rowId }}"
                                            class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a></td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table><!-- End .table table-wishlist -->
                    @if (Cart::content()->count() > 0)
                        <div class="cart-bottom">
                            <button class="btn btn-outline-dark-2"><span>Cập nhật</span><i class="icon-refresh"></i>
                            </button>
                        </div><!-- End .cart-bottom -->
                    @endif


                </form><!-- End .col-lg-9 -->
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Hóa đơn</h3><!-- End .summary-title -->

                        <table class="table table-summary">
                            <tbody>
                                <tr class="summary-total">
                                    <td>Tổng cộng:</td>
                                    <td>{{ Cart::total() }}</td>
                                </tr><!-- End .summary-total -->
                            </tbody>
                        </table><!-- End .table table-summary -->
                        @if (Cart::content()->count() > 0)

                            <a href="checkout" class="btn btn-outline-primary-2 btn-order btn-block">Thanh toán</a>
                        @endif


                    </div><!-- End .summary -->

                    <a href="/" class="btn btn-outline-dark-2 btn-block mb-3"><span>Về trang chủ</span><i
                            class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
@endsection
@livewireScripts
