@extends('admin.main')
@section('content')
@section('titlename', 'Danh sách đơn hàng')

<div class="content">
    <div class="row">

        @include('admin.elements.title')

    </div>
    @include('admin.elements.notification')
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th>ID đơn hàng</th>
                            <th>Tên người nhận</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đặt</th>
                            <th>Tổng tiền</th>
                            <th>Số điện thoại</th>
                            <th>Phương thức thanh toán</th>
                            <th>Trạng thái đơn hàng</th>
                            <th class="text-right">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)

                            <tr>
                                <td>{{ $item->idBill }}</td>
                                <td>{{ $item->billName }}</td>
                                <td>{{ $item->diachi }}</td>
                                <td>{{ $item->ngayDatHang }}</td>
                                <td>{{ $item->tongTien }}s</td>
                                <td>{{ $item->billTel }}</td>
                                @if ($item->pttt == 0)
                                    <td><span class="custom-badge status-pink">Ship code</span></td>
                                @endif
                                @if ($item->pttt == 1)
                                    <td><span class="custom-badge status-pink">Online</span></td>
                                @endif
                                @if ($item->billstatus == 0)
                                    <td><span class="custom-badge status-orange">Đơn mới</span></td>
                                @endif
                                @if ($item->billstatus == 1)
                                    <td><span class="custom-badge status-blue">Đang vận chuyển</span></td>
                                @endif
                                @if ($item->billstatus == 2)
                                    <td><span class="custom-badge status-green">Giao hàng thành công</span></td>
                                @endif
                                @if ($item->billstatus == 3)
                                    <td><span class="custom-badge status-red">Đã hủy</span></td>
                                @endif

                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="/admin/orders/edit/{{ $item->idBill }}"><i
                                                    class="fa fa-pencil m-r-5"></i> Sửa</a>
                                            <a class="dropdown-item"
                                                href="/admin/orders/detail/{{ $item->idBill }}"><i
                                                    class="fa fa-info-circle"> </i> Xem chi tiết</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
