
 <form class="form-horizontal" enctype="multipart/form-data" id="frm_pr_add" action="addPost" method="post">
<div class="row clearfix">
    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
     <div class="card">
        <div class="header">
            <h2>
                THÊM SẢN PHẨM
            </h2>
            <ul class="header-dropdown m-r--5">

            </ul>
        </div>
        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne_1">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="false" aria-controls="collapseOne_1" class="collapsed">
                           THÔNG TIN SẢN PHẨM
                       </a>
                   </h4>
               </div>
               <div id="collapseOne_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_1" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                   <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="email_address_2">Nhà sản xuất</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <select name="producer" class="form-control ">
                            <?php
                            foreach($list_producer as $key => $value){
                                ?>
                                <option  value="<?php echo $value->id?>"><?php echo $value->name?></option>
                                <?php
                            }
                            ?>
                        </select>

                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Tên</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Giá</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="price" name="price" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Số lượng</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="quantyti" name="quantyti" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                        <label for="password_2">Khuyến mại</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="sale_off" id="sale_off" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingThree_1">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false" aria-controls="collapseThree_1">
                    THÔNG SỐ KỸ THUẬT
                </a>
            </h4>
        </div>
        <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1" aria-expanded="false">
            <div class="panel-body">
             <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Mô tả</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="description" id="description" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                    <script type="text/javascript">
                    $(document).ready(function() {
                        CKEDITOR.replace('description');
                    });
                         
                    </script>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Màn hình</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="display" id="display" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Camera</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="camera" id="camera" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Hệ điều hành</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="operating" id="operating" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Bộ nhớ</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="storage" id="storage" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Mạng</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="network" id="network" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Thiết kế</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="design" id="design" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Dung lượng Pin</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="battery" id="battery" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Tiện ích</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="utilities" id="utilities" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <input style="display: none" type="file" accept="image/*" name="images[]" multiple id="images"  required class="form-control" placeholder="Enter your image">
</form>
  <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="headingTwo_1">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false" aria-controls="collapseTwo_1">
                    ẢNH SẢN PHẨM
                </a>
            </h4>
        </div>
        <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
               <div class="form-group">
                <div class="form-line">
                    <input type="file" accept="image/*" name="images[]" multiple id="images"  required class="form-control" placeholder="Enter your image">
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<button id="submitform" class="btn btn-primary pull-right">Thêm</button>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#collapseOne_1').collapse("show");
        $('#collapseThree_1').collapse("show");
        $('#collapseTwo_1').collapse("show");
     
    $('#submitform').click(function () {
        $('#frm_pr_add').submit();
    })

});
</script>
