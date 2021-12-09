@extends('admin.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg1"><i class="fa fa-cube" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>98</h3>
                        <span class="widget-title1">Tổng Sản phẩm <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>1072</h3>
                        <span class="widget-title2">Tổng users <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg3"><i class="fa fa-truck" aria-hidden="true"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>72</h3>
                        <span class="widget-title3">Tổng đơn hàng <i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <span class="dash-widget-bg4"><i class="fa fa-money"></i></span>
                    <div class="dash-widget-info text-right">
                        <h3>618</h3>
                        <span class="widget-title4"> Tổng doanh thu<i class="fa fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title">
                            <h4>Patient Total</h4>
                            <span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15%
                                Higher than Last Month</span>
                        </div>
                        <canvas id="linegraph"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title">
                            <h4>Patients In</h4>
                            <div class="float-right">
                                <ul class="chat-user-total">
                                    <li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
                                    <li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
                                </ul>
                            </div>
                        </div>
                        <canvas id="bargraph"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}


    </div>

@endsection
