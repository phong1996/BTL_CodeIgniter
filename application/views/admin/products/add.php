
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
                        <label for="email_address_2">Producer</label>
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
                        <label for="password_2">Name</label>
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
                        <label for="password_2">Price</label>
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
                        <label for="password_2">Quantyti</label>
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
                        <label for="password_2">Sale_Off</label>
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
                    <label for="password_2">Description</label>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="description" id="description" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                    <label for="password_2">Display</label>
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
                    <label for="password_2">Operating</label>
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
                    <label for="password_2">Storage</label>
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
                    <label for="password_2">Network</label>
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
                    <label for="password_2">Design</label>
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
                    <label for="password_2">Battery_Change</label>
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
                    <label for="password_2">Utilities</label>
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
                <div class="row clearfix">
                    <form action="ajaxPostImage" class="dropzone" id="myAwesomeDropzone">
                        <div class="dz-message">
                            <div class="drag-icon-cph">
                                <i class="material-icons">touch_app</i>
                            </div>
                            <h3>Drop files here or click to upload.</h3>
                        </div>
                    </form>
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
        Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 3, // MB
        resizeWidth:100,
        resizeHeight:100,
        acceptedFiles:'image/*',
        addRemoveLinks: true,
        removedfile:function (file) {
            file.previewElement.parentNode.removeChild(file.previewElement);
        }
    };
    $('#submitform').click(function () {
        $('#frm_pr_add').submit();
    })

});
</script>
