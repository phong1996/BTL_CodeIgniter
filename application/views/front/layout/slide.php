<div class="slider-area" style="font-family: 'Open Sans Condensed', sans-serif">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <?php
            if(isset($list_slide))
            {
                foreach($list_slide as $key => $value)
                {
                    ?>
                    <li>
                        <img src="<?php echo base_url().'images/slide/'.$value->images?>" alt="Slide">
                        <div class="caption-group">
                            <h2 class="caption title" style="color: red">
                                <b>Ưu đãi cực lớn</b>    <i class="fa fa-plus-square" aria-hidden="true"></i>
                            </h2>
                            <h3 class="caption subtitle" style="color:#CFB408;"><?php echo $value->name?></h3>
                            <a class="caption button-radius" href="#"><span class="icon"></span>Mua Ngay</a>
                        </div>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

