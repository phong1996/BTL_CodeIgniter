
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    QUẢN LÝ SẢN PHẨM
                </h2>
                <ul class="header-dropdown">

                    <a class="btn btn-primary" href="<?php echo url_admin('products/add'); ?>">Thêm mới</a>

                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Producer</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Price</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Quantyti</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Avatar</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Sale_Off</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Views</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Producer</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Price</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Quantyti</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Avatar</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Sale_Off</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Views</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <div class="divpopup"style="display: none">
                            this is my title
                        </div>
                        <?php foreach ($list_products as $key => $value) {
                            ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$value->name?></td>
                                <td class="sorting_1"><?=$value->name_pr?></td>
                                <td class="sorting_1"><?=$value->price?></td>
                                <td class="sorting_1"><?=$value->quantyti?></td>
                                <td><?php
                                    if(!empty($value->avatar))
                                    {
                                       ?>
                                        <img src="<?=base_url().'images/products/'.$value->avatar?>" width=100>
                                        <?php
                                    }else
                                    {
                                        ?>
                                         <p style="text-align: center">No Avatar</p>
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Chọn Avatar</button>
                                        <?php
                                    }
                                    ?></td>
                                <td class="sorting_1"><?=$value->sale_off ?></td>
                                <td class="sorting_1"><?=$value->views?></td>
                                <td class="sorting_1"><?=$value->description?></td>
                                <td>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" id="producer_status" producer_id="<?php echo $value->id?>" <?php echo ($value->status == 0)?'':'checked' ?> >
                                            <span class="lever switch-col-blue"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo url_admin('products/delete'); ?>/<?php echo $value->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><a href="<?php echo url_admin('products/edit'); ?>/<?php echo $value->id ?>"><i style="margin-left: 18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Hãy chọn avatar cho sản phẩm</h4>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    print_r($img);
                                        foreach($img as $key => $value)
                                        {
                                            echo $key;

                                            ?>
                                            <img src="<?=base_url()?>images/products/<?php echo $value->name?>" alt="">
                                            <?php
                                        }
                                        ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>