<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    QUẢN LÝ NHÀ SẢN XUẤT
                </h2>
                <ul class="header-dropdown">
                  
                    <a class="btn btn-primary" href="<?php echo url_admin('producer/add'); ?>">Thêm mới</a>
                   
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">ID</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">logo</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                        <th rowspan="1" colspan="1">Name</th>
                        <th rowspan="1" colspan="1">logo</th>
                        <th rowspan="1" colspan="1">status</th>
                        <th rowspan="1" colspan="1">action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($list_producer as $key => $value) {
                            ?>
                        <tr role="row" class="odd">
                            <td><?=$value->id?></td>
                            <td class="sorting_1"><?=$value->name?></td>
                            <td><?=$value->logo?></td>
<!--                            <td><?/*=$value->status*/?></td>-->
                            <td><a href="<?php echo url_admin('producer/delete'); ?>?id=<?php echo $value->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><a href="<?php echo url_admin('producer/updatePages'); ?>?id=<?php echo $value->id ?>"><i style="margin-left: 18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>