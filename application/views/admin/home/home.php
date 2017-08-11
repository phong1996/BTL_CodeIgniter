<div class="container-fluid">
    <div class="block-header">
        <h2>DASHBOARD</h2>
    </div>
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">add_shopping_cart</i>
                </div>
                <div class="content">
                    <div class="text">Đơn hàng trong ngày</div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $today_orders ?>" data-speed="15" data-fresh-interval="20">125</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">Đăng ký trong ngày</div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $today_user ?>" data-speed="1000" data-fresh-interval="20">257</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">check_circle</i>
                </div>
                <div class="content">
                    <div class="text">Tổng số sản phẩm</div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $total_product ?>" data-speed="1000" data-fresh-interval="20">243</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">euro_symbol</i>
                </div>
                <div class="content">
                    <div class="text">Doanh thu trong ngày</div>
                    <div class="number count-to" data-from="0" data-to="<?php echo $revenue; ?>" data-speed="1000" data-fresh-interval="20"><?php echo $revenue; ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
    <!-- CPU Usage -->
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h2>CPU USAGE (%)</h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 align-right">
                            <div class="switch panel-switch-btn">
                                <span class="m-r-10 font-12">REAL TIME</span>
                                <label>OFF<input type="checkbox" id="realtime" checked=""><span class="lever switch-col-cyan"></span>ON</label>
                            </div>
                        </div>
                    </div>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div id="real_time_chart" class="dashboard-flot-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="949" height="275" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 949px; height: 275px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 22px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 110px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 201px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 293px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 384px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 476px; text-align: center;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 567px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 658px; text-align: center;">70</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 750px; text-align: center;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 841px; text-align: center;">90</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 86px; top: 258px; left: 930px; text-align: center;">100</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 245px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 196px; left: 7px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 147px; left: 7px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 98px; left: 7px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 49px; left: 7px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="949" height="275" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 949px; height: 275px;"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# CPU Usage -->
</div>