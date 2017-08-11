<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url().'home' ?>">Home</a></li>
                    <li><a href="<?php echo base_url().'News' ?>">Tin công nghệ</a></li>
                    <?php
                        foreach($this->session->userdata('menu') as $value)
                        {
                    ?>
                            <li><a href="<?php echo base_url()?>producer/index/<?php echo $value->id?>"><?php echo $value->name ?></a></li>

                    <?php } ?>
                    <li class=""><a href="<?php echo base_url().'news' ?>">Tech news</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->