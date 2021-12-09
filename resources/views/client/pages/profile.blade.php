@extends('client.main')
@section('content')
@section('title', 'Trang cá nhân')
@section('contenttitle', 'Thông tin cá nhân và đơn hàng')
<div class="page-content">
    @include('client.elements.pagetitle')
    @include('client.elements.notification')
    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-2 col-lg-2">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account"
                                    role="tab" aria-controls="tab-account" aria-selected="false">Thông tin tài khoản</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address"
                                    role="tab" aria-controls="tab-address" aria-selected="false">Tình trạng đơn hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Đăng xuất</a>
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->

                    <div class="col-md-10 col-lg-10">
                        <div class="tab-content">

                            <div class="tab-pane fade" id="tab-address" role="tabpanel"
                                aria-labelledby="tab-address-link">

                                <table class="table table-cart table-mobile">
                                    <thead>
                                        <tr>
                                            <th>Tên người nhận</th>
                                            <th>Địa chỉ</th>
                                            <th>Tổng tiền</th>
                                            <th>SĐT</th>
                                            <th>Phương thức thanh toán</th>
                                            <th>Trạng thái đơn hàng</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($listorders as $item)
                                            <tr>
                                                <td>{{ $item->billName }}</td>
                                                <td>{{ $item->diachi }}</td>
                                                <td>{{ $item->tongTien }}s</td>
                                                <td>{{ $item->billTel }}</td>
                                                @if ($item->pttt == 0)
                                                    <td><span class="custom-badge status-pink">Thanh toán khi nhận
                                                            hàng</span>
                                                    </td>
                                                @endif
                                                @if ($item->pttt == 1)
                                                    <td><span class="custom-badge status-pink">Đã thanh toán</span></td>
                                                @endif
                                                @if ($item->billstatus == 0)
                                                    <td><span class="custom-badge status-orange">Đơn mới</span></td>
                                                @endif
                                                @if ($item->billstatus == 1)
                                                    <td><span class="custom-badge status-blue">Đang vận chuyển</span>
                                                    </td>
                                                @endif
                                                @if ($item->billstatus == 2)
                                                    <td><span class="custom-badge status-green">Giao hàng thành
                                                            công</span></td>
                                                @endif
                                                @if ($item->billstatus == 3)
                                                    <td><span class="custom-badge status-red">Đã hủy</span></td>
                                                @endif
                                            </tr>

                                        @endforeach



                                    </tbody>
                                </table><!-- End .table table-wishlist -->


                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-account" role="tabpanel"
                                aria-labelledby="tab-account-link">
                                <form method="POST" action="/update">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Họ tên *</label>
                                            <input type="text" name="hoTen"
                                                value="{{ session()->get('infouser')->hoTen }}" class="form-control"
                                                required="">
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="sdt"
                                        value="{{ session()->get('infouser')->sdt }}" required="">
                                    <label>Email *</label>
                                    <input type="text" class="form-control" name="email"
                                        value="{{ session()->get('infouser')->email }}" required="">
                                    <input type="hidden" class="form-control" name="idUser"
                                        value="{{ session()->get('infouser')->idUser }}" required="">

                                    <label>Mật khẩu mới</label>
                                    <input type="password" class="form-control" name="password">

                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>SAVE CHANGES</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </form>
                            </div><!-- .End .tab-pane -->
                        </div>
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div>

</div><!-- End .page-content -->
@endsection
@livewireScripts
