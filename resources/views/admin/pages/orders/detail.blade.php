@extends('admin.main')
@section('content')
@section('titlename', 'Đơn hàng chi tiết')
@section('titleaction', '')

<div class="content">
    <div class="row">

        @include('admin.elements.title')

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table">
                    <thead>
                        <tr>
                            <th>ID đơn hàng</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->idBill }}</td>
                                <td>
                                    <img width="28" height="28"
                                        src={{ URL::asset('clienttemplate/assets/images/product/' . $item->img) }}
                                        class="rounded-circle m-r-5" alt=""> {{ $item->name }}
                                </td>
                                <td>{{ $item->soLuong }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->tongtien }}</td>
                                <?php $tong += $item->tongtien; ?>

                            </tr>
                        @endforeach
                        <tr>
                            <th colspan="4">Tổng tiền</th>

                            <td colspan="">{{ $tong }}</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
