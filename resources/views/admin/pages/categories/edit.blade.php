@extends('admin.main')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Sửa danh mục</h4>
            </div>
        </div>

        @include('admin.elements.notification')
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" type="text" value="{{ $item->tenLoai }}" name="tenLoai">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Hình ảnh</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="image">
                        </div>
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
