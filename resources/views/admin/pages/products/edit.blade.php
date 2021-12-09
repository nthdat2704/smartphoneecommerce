@extends('admin.main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Sửa sản phẩm</h4>
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

                                <label>Tên sản phẩm</label>
                                <input class="form-control" type="text" name="tenSP" value="{{ $item->tenSP }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" type="number" name="gia" value="{{ $item->gia }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="select" name="idLoai">
                                    @foreach ($categoriesListItems as $row)
                                        <option value={{ $row->idLoai }}>{{ $row->tenLoai }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Hình ảnh</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="hinhanh" value=" {{ $item->hinhanh }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea cols="30" rows="4" id="ckeditor1" name="moTa"
                            class="form-control">{{ $item->moTa }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Ẩn / Hiện</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anHien" id="product_active" value="1"
                                checked>
                            <label class="form-check-label" for="product_active">
                                Hiện
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anHien" id="product_inactive" value="0">
                            <label class="form-check-label" for="product_inactive">
                                Ẩn
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
