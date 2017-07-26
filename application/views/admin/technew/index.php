<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    QUẢN LÝ TIN CÔNG NGHỆ
                </h2>
                <ul class="header-dropdown m-r--5">
                    <a class="btn btn-primary" href="<?php echo url_admin('Technews/add'); ?>">Thêm mới</a>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Title</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Intro</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Content</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Image</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Action</th>
                        </thead>
                        <tfoot>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Title</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Intro</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Content</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Image</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Action</th>
                        </tfoot>
                        <tbody>
                        <?php foreach ($list_news as $key => $value) {
                            ?>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><?=$value->title?></td>
                                <td class="sorting_1"><?=$value->intro?></td>
                                <td class="sorting_1"><?=$value->content?></td>
                                <td><img src="<?=base_url().'images/news/'.$value->images?>" width=100></td>
                                <td>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox" class="news_status" news_id="<?php echo $value->id?>" <?php echo ($value->status == 0)?'':'checked' ?> >
                                            <span class="lever switch-col-blue"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <a href="<?php echo url_admin('Technews/delete'); ?>/<?php echo $value->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><a href="<?php echo url_admin('Technews/edit'); ?>/<?php echo $value->id ?>"><i style="margin-left: 18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>