<div class="col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#337AB7; color:white; text-align: center">
            <h1><b style="font-weight: bold; font-size: 40px">Tin Công Nghệ</b></h1>
        </div>

        <?php
        if(isset($list_news))
        {

            foreach($list_news as $value){
                ?>
                <div class="row-item row">
                    <div class="col-md-3">

                        <a href="<?php echo base_url()?>news/detail/<?php echo $value->id?>">
                            <br>
                            <img  width="200px" height="200px" class="img-responsive image" src="<?php echo base_url()?>images/news/<?php echo $value->images?>" style="border: 1px solid blue;     margin-left: 95px;"  alt="">
                        </a>
                    </div>

                    <div class="col-md-9" style="margin-top: 71px;">
                        <h3><p style="font-size: 25px; font-weight: bold"><?php echo $value->title?></p></h3>
                        <p><?php echo $value->intro ?></p>
                        <a class="btn btn-primary" href="<?php echo base_url()?>news/detail/<?php echo $value->id?>">Xem Thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="break"></div>
                </div>
                <?php
            }
        }

        ?>



        <!-- Pagination -->
       <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>-->
        <!-- /.row -->

    </div>
</div>