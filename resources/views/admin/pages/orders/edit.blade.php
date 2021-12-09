@extends('admin.main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Sửa đơn hàng</h4>
            </div>
        </div>


        @include('admin.elements.notification')
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    ID đơn hàng</label>
                                <input class="form-control" type="text" value="{{ $item->idBill }}" name="idBill"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Tên người nhận</label>
                                <input class="form-control" type="text" value="{{ $item->billName }}" name="billName"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Địa chỉ</label>
                                <input class="form-control" type="text" value="{{ $item->diachi }}" name="diachi"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Ngày đặt</label>
                                <input class="form-control" type="text" value="{{ $item->ngayDatHang }}"
                                    name="ngayDatHang" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Trạng thái đơn hàng</label>
                                <select class="select form-control" name="billstatus">
                                    @if ($item->billstatus == 0)
                                        <option value="{{ $item->billstatus }}" selected>Đơn mới</option>
                                        <option value="1">Đang vận chuyển</option>
                                        <option value="2">Giao hàng thành công</option>
                                        <option value="3">Hủy đơn</option>
                                    @endif



                                    @if ($item->billstatus == 1)
                                        <option value="0">Đơn mới</option>
                                        <option value="{{ $item->billstatus }}" selected>Đang vận chuyển</option>
                                        <option value="2">Giao hàng thành công</option>
                                        <option value="3">Hủy đơn</option>
                                    @endif
                                    @if ($item->billstatus == 2)
                                        <option value="0">Đơn mới</option>
                                        <option value="1">Đang vận chuyển</option>
                                        <option value="{{ $item->billstatus }}" selected>Giao hàng thành công</option>
                                        <option value="3">Hủy đơn</option>
                                    @endif
                                    @if ($item->billstatus == 3)
                                        <option value="3">Hủy đơn</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                    </div>




                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
