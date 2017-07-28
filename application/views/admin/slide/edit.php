<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    SỬA NHÀ SẢN XUẤT
                </h2>
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
                <form class="form-horizontal" id="form_slide_edit" enctype="multipart/form-data" method="post" action="<?php echo url_admin('slide/postEdit'); ?>" >
                    <input type="hidden" id="id" name="id" value="<?php echo $slide->id; ?>">

                    <div class="row clearfix">
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="col-md-offset-2" style="margin-bottom: 10px">
                                    <img id="image" src="<?php echo base_url().'images/slide/'.$slide->images; ?>" width=200>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                           <label for="file_edit">Chọn ảnh :</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">

                                    <label class="input-group-btn">
                                      <span class="btn btn-primary">
                                          Browse… <input id="file_edit" accept="image/*" name="file_edit" type="file" style="display: none;" multiple="">
                                      </span>
                                  </label>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Link</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required value="<?php echo $slide->link ?>" name="link" id="link" class="form-control" placeholder="Tên slide...">
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="name">Name</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" required value="<?php echo $slide->name ?>" name="name" id="name" class="form-control" placeholder="Tên slide...">
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
                                    <label><input type="checkbox" name="status" <?php echo ($slide->status==0)?'':'checked'; ?>><span class="lever switch-col-blue"></span></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SỬA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
