<!-- Sign in / Register Modal -->
@if (session()->get('infouser') == null)
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">Đăng nhập</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                        role="tab" aria-controls="register" aria-selected="false">Đăng ký</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    @include('client.elements.notification')

                                    <form method="POST" action="/login">
                                        <div class="form-group">
                                            <label for="singin-email">Email *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email">
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Mật khẩu *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password">
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ĐĂNG NHẬP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Ghi
                                                    nhớ</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Quên mật khẩu?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel"
                                    aria-labelledby="register-tab">
                                    @include('client.elements.notification')

                                    <form method="POST" action="/register">
                                        <div class="form-group">
                                            <label for="register-email">Email</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email">
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Mật khẩu *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password">
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Họ tên</label>
                                            <input type="text" class="form-control" id="register-password"
                                                name="register-name">
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Số điện thoại</label>
                                            <input type="text" class="form-control" id="register-password"
                                                name="register-numberphone">
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Đăng ký</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <!-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div> -->
                                        </div><!-- End .form-footer -->
                                    </form>

                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

@else
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">Thông tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                        role="tab" aria-controls="register" aria-selected="false">Đơn hàng</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    @include('client.elements.notification')

                                    <form method="POST" action="/login">
                                        <div class="form-group">
                                            <label for="singin-email">Email *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email">
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Mật khẩu *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password">
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>ĐĂNG NHẬP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Ghi
                                                    nhớ</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Quên mật khẩu?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel"
                                    aria-labelledby="register-tab">
                                    @include('client.elements.notification')

                                    <form method="POST" action="/register">
                                        <div class="form-group">
                                            <label for="register-email">thông tin nè</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email">
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Mật khẩu *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password">
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Họ tên</label>
                                            <input type="text" class="form-control" id="register-password"
                                                name="register-name">
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Số điện thoại</label>
                                            <input type="text" class="form-control" id="register-password"
                                                name="register-numberphone">
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Đăng ký</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <!-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                        </div> -->
                                        </div><!-- End .form-footer -->
                                    </form>

                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

@endif
