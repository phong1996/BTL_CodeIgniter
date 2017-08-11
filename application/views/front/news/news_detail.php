<div class="col-md-12 " style="background-color: white">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:#337AB7; color:white; text-align: center">
            <h1><b style="font-weight: bold; font-size: 40px">Tin Công Nghệ</b></h1>
        </div>

        <div class="col-md-2">

        </div>
        <div class="col-md-8" style="font-size: 20px;padding: 25px;">
            <?php foreach($detail as $value){
                ?>
                <p style="font-size: 35px; font-weight: bold; margin-bottom: 20px;"><?php echo $value->title;?></p>
                <?php
                echo $value->content;
            } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div><?php
