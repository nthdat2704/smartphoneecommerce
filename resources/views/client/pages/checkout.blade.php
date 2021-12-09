@extends('client.main')
@section('content')
@section('title', 'Thanh toán')
@section('contenttitle', 'Thanh toán đơn hàng')
<div class="page-content">
    @include('client.elements.pagetitle')
    @include('client.elements.notification')
    <div class="checkout">
        <div class="container">
            <form method="post" action="">
                <div class="row">
                    <div class="col-lg-9">
                        <label>Họ và tên *</label>
                        <input type="text" name="billName" class="form-control" value="{{ old('billName') }}">

                        <label>Địa chỉ *</label>
                        <input type="text" name="diachi" value="{{ old('diachi') }}" class="   form-control"
                            placeholder="">


                        <label>Điện thoại *</label>
                        <input type="tel" name="billTel" value="{{ old('billTel') }}" class="   form-control">


                        <label>Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">

                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Đơn hàng</h3><!-- End .summary-title -->

                            <div class="accordion-summary" id="accordion-payment">
                                <div class="card">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            <input class="form-check-input" type="radio" name="pttt"
                                                id="product_inactive" value="1">
                                            <label for="">Thanh toán online</label>
                                        </h2>
                                    </div><!-- End .card-header -->
                                </div><!-- End .card -->
                                <div class="card">
                                    <div class="card-header" id="heading-1">
                                        <h2 class="card-title">
                                            {{-- <a role="button" data-toggle="collapse" href="#collapse-1"
                                                aria-expanded="true" aria-controls="collapse-1">
                                                Thanh toán khi nhận hàng
                                            </a> --}}
                                            <input class="form-check-input" type="radio" name="pttt"
                                                id="product_inactive" value="0">
                                            <label for="">Thanh toán khi nhận hàng</label>
                                        </h2>
                                    </div><!-- End .card-header -->
                                </div><!-- End .card -->


                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Đặt hàng</span>
                                    <span class="btn-hover-text">Đặt hàng</span>
                                </button>
                            </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->


@endsection
