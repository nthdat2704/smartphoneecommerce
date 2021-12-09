@extends('admin.main')
@section('content')
@section('titlename', 'Danh sách sản phẩm')
@section('titleaction', 'Thêm sản phẩm')
@section('urlaction', '/admin/products/add')

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
                            <th>ID sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>ID loại</th>
                            <th>TOP</th>
                            <th>Trạng thái</th>
                            <th class="text-right">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->idSP }}</td>
                                <td><img width="28" height="28"
                                        src={{ URL::asset('clienttemplate/assets/images/product/' . $item->hinhanh) }}
                                        class="rounded-circle m-r-5" alt=""> {{ $item->tenSP }}</td>
                                <td>{{ $item->gia }}</td>
                                <td>mota</td>
                                <td>{{ $item->idLoai }}</td>
                                <td>{{ $item->Top }}</td>
                                @if ($item->anHien == 0)
                                    <td><span class="custom-badge status-red">Ẩn</span></td>


                                @endif
                                @if ($item->anHien == 1)

                                    <td><span class="custom-badge status-green">Hiện</span></td>
                                @endif



                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="/admin/products/edit/{{ $item->idSP }}"><i
                                                    class="fa fa-pencil m-r-5"></i> Sửa</a>
                                            <a class="dropdown-item"
                                                href="/admin/products/delete/{{ $item->idSP }}"><i
                                                    class="fa fa-trash-o m-r-5"></i>Xóa</a>
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
