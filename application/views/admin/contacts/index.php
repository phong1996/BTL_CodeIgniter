<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    QUẢN LÝ LIÊN HỆ
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
                        <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Content</th><th rowspan="1" colspan="1">Phone</th><th rowspan="1" colspan="1">Action</th></tr>
                        </thead>
                        <tfoot>
                        <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Content</th><th rowspan="1" colspan="1">Phone</th><th rowspan="1" colspan="1">Action</th></tr>
                        </tfoot>
                        <tbody>

                        <?php
                        foreach($list_contact as $key => $li)
                            {
                               
                        ?>
                        <tr role="row" class="even">
                            <td class="sorting_1"><?=$li->id?></td>
                            <td><?=$li->email?></td>
                            <td><?=$li->content?></td>
                            <td><?=$li->phone?></td>
                            <td><a href="<?php echo url_admin('contacts/delete'); ?>?id=<?php echo $li->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <a href="#">Trả Lời</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>