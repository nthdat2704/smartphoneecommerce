@extends('admin.main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Cập nhật thông tin users</h4>
            </div>

        </div>
        @include('admin.elements.notification')
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="">
                    {{-- @csrf --}}
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="userName" value=" {{ $item->userName }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Họ và tên:</label>
                                <input class="form-control" type="text" name="hoTen" value="{{ $item->hoTen }}"
                                    readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    Điện thoại</label>
                                <input class="form-control" type="text" name="sdt" value=" {{ $item->sdt }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" value=" {{ $item->email }}"
                                    readonly>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Vai trò</label>
                                <select name="role" class="select form-group">
                                    @if ($item->role == 0)
                                        <option value="{{ $item->role }}" selected>Admin</option>
                                        <option value="1">User</option>
                                    @endif
                                    @if ($item->role == 1)
                                        <option value="0">Admin</option>
                                        <option value="{{ $item->role }}" selected>User</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="display-block">Trạng thái</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kickHoat" id="product_active" value="1"
                                checked>
                            <label class="form-check-label" for="product_active">
                                Hoạt động
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kickHoat" id="product_inactive" value="0">
                            <label class="form-check-label" for="product_inactive">
                                Không hoạt động
                            </label>
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
