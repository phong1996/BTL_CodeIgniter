<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    THÊM NHÀ SẢN XUẤT
                </h2>
                <?php if(isset($error)){echo $error;} ?>
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
                <form class="form-horizontal" id="form_producer" enctype="multipart/form-data" method="post" action="<?php echo url_admin('producer/postAdd'); ?>" >
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Name</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Tên nhà sản xuất">
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">status</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="margin-top: 7px;">
                            <div class="form-group">
                                <div class="switch">
                                    <label><input type="checkbox" name="status" checked=""><span class="lever switch-col-blue"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Logo</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                           <div class="form-group">
                                <div class="form-line">
                                    <label class="input-group-btn">
                                      <span class="btn btn-primary">
                                          Browse… <input id="file_edit" accept="image/*" name="logo" type="file" style="display: none;" multiple="">
                                      </span>
                                  </label>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <img id="image" width=100>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">THÊM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
