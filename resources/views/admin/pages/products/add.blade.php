@extends('admin.main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Thêm sản phẩm</h4>
            </div>
        </div>

        @include('admin.elements.notification')
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" type="text" name="tenSP" value="{{ old('tenSP') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" type="number" name="gia" value="{{ old('gia') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="idLoai" class="select" value="{{ old('idLoai') }}">

                                    @foreach ($categoriesListItems as $item)
                                        <option value={{ $item->idLoai }}>{{ $item->tenLoai }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Hình ảnh</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="hinhanh" value="{{ old('hinhanh') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea cols="30" rows="4" id="ckeditor1" class="form-control" name="moTa"
                            value="{{ old('moTa') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Ẩn / Hiện</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anHien" value="1" id="product_active"
                                checked>
                            <label class="form-check-label" for="product_active">
                                Hiện
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="anHien" value="0" id="product_inactive">
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
