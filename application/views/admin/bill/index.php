<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    QUẢN LÝ ĐƠN HÀNG
                </h2>
                <div><p><?php echo $this->session->flashdata('flash_message'); ?></p></div>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >Tên khách hàng</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Số điện thoại</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Địa Chỉ</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Tổng Tiền</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Giao dịch</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Trạng Thái</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php
                        foreach($list_bill as $key => $li)
                        {
                            ?>
                        <tr role="row" class="even">
                            <td><?=$li->cus_name?></td>
                            <td><?=$li->cus_phone?></td>
                            <td><?=$li->cus_adress?></td>
                            <td><?=number_format($li->total_price) ?> đồng</td>
                            <td>
                                <?php if ($li->payment=='offline'): ?>
                                    TT khi nhận hàng
                                <?php else: ?>
                                    Bảo Kim
                                <?php endif ?>
                            </td>
                            <td>
                                <?php if ($li->status==0): ?>
                                    Chưa Giao Hàng
                                <?php else: ?>
                                    Đã giao hàng
                                <?php endif ?>
                            </td>
                             <td>
                                <a href="<?php echo url_admin('Bill/delete'); ?>?id=<?php echo $li->id ?>"><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('Bạn muốn xóa???');"></i></a>
                                <a href="<?php echo url_admin('Bill/updateLoad'); ?>?id=<?php echo $li->id ?>"><i style="margin-left: 18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>