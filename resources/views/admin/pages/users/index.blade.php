@extends('admin.main')
@section('content')
@section('titlename', 'Danh sách users')

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
                            <th>ID user</th>
                            <th>Username</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th class="text-right">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)


                            <tr>
                                <td>{{ $item->idUser }}</td>
                                <td>{{ $item->userName }}</td>
                                <td>{{ $item->hoTen }}</td>
                                <td>{{ $item->sdt }}</td>
                                <td>{{ $item->email }}</td>
                                @if ($item->role == 0)
                                    <td><span class="custom-badge status-purple">Admin</span></td>
                                @endif
                                @if ($item->role == 1)
                                    <td><span class="custom-badge status-orange">User</span></td>
                                @endif
                                @if ($item->kickHoat == 0)
                                    <td><span class="custom-badge status-red">Không hoạt động</span></td>
                                @endif
                                @if ($item->kickHoat == 1)
                                    <td><span class="custom-badge status-green">Hoạt động</span></td>
                                @endif
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="/admin/users/edit/{{ $item->idUser }}"><i
                                                    class="fa fa-pencil m-r-5"></i> Sửa</a>
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
