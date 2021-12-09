<div id="delete_appointment" class="modal fade delete-modal" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{ URL::asset('admintemplate/assets/img/sent.png') }}" alt="" width="50" height="46">
                <h3>Xóa sản phẩm này ?</h3>
                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Đóng</a>
                    {{-- <button type="submit" class="btn btn-danger">Xóa</button> --}}
                    <a class="btn btn-danger" href="/">Xóa</a>
                </div>
            </div>
        </div>
    </div>
</div>
