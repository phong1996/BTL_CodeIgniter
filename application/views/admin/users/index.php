<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    QUẢN LÝ TÀI KHOẢN  
                    <a href="<?php echo url_admin('users/add'); ?>"> <button  class="btn btn-primary dropdown-toggle pull-right"></span><b>Thêm Mới</b></button></a>
                </h2>
                <div><p><?php echo $this->session->flashdata('flash_message'); ?></p></div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 235px;">Username</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 46px;">Fullname</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 97px;">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 250px;">Adress</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Phone</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Level</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Created_at</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 40px;">Action</th>

                        </thead>
                        <tbody>
                        <?php
                           foreach($list_user as $key => $li) {

                               ?>
                               <tr role="row" class="even">
                                   <td><?php echo $li->username ?></td>
                                   <td><?php echo $li->fullname ?></td>
                                   <td><?php echo $li->email ?></td>
                                   <td><?php echo $li->address ?></td>
                                   <td><?php echo $li->phone ?></td>
                                   <td>Khách Hàng</td>
                                   <td>
                                       <div class="switch">
                                           <label><input type="checkbox" class="user_status" name="status"
                                                         user_id="<?php echo $li->id ?>" <?php echo ($li->status == 0) ? '' : 'checked' ?> ><span
                                                   class="lever switch-col-blue"></span></label>
                                       </div>
                                   </td>
                                   <td><?php echo $li->created_at ?></td>
                                   <td><a href="<?php echo url_admin('users/delete'); ?>?id=<?php echo $li->id ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a><a href="<?php echo url_admin('users/updatePages'); ?>?id=<?php echo $li->id ?>"><i style="margin-left: 18px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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
