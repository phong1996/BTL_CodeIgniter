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
                    <li class="active"><a href="index.html">Home</a></li>
                    <?php
                        foreach($this->session->userdata('menu') as $value)
                        {
                    ?>
                            <li><a href="index.html"><?php echo $value->name ?></a></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->