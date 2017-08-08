<!DOCTYPE html>
<!--
    ustora by freshdesignweb.com
    Twitter: https://twitter.com/freshdesignweb
    URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" type="text/css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo public_front_url()?>/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo public_front_url()?>/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo public_front_url()?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo public_front_url()?>/style.css">
    <link rel="stylesheet" href="<?php echo public_front_url()?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo public_front_url()?>/popup_login/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="<?php echo public_front_url()?>/popup_login/css/style.css"> <!-- Gem style -->
    <script src="<?php echo public_front_url()?>/popup_login/js/modernizr.js"></script>
    <script src="https://code.jquery.com/jquery.min.js"></script>




</head>
<body style="font-family: 'Open Sans Condensed', sans-serif">
<div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=1103517983003307";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="header-area">
    <div class="container">
        <div class="row" style="text-align: center">
            <div class="col-md-12">
                <div class="user-menu">
                    <ul>
                       <?php if(!isset($this->session->userdata('customer_login')->fullname)){
                           ?>

                           <li><a class="cd-signin" href="<?php echo base_url()?>/login"><i class="fa fa-user"></i> Đăng nhập</a></li>
                           <li><a href="<?php echo base_url()?>register"><i class="fa fa-users" aria-hidden="false"></i> Đăng ký</a></li>
                           <?php
                       } ?>
                        <?php if(isset($this->session->userdata('customer_login')->fullname)){
                            ?><li><a href="Userinfo/index/<?php echo $this->session->userdata('customer_login')->id; ?>"><i class="fa fa-user"></i>Xin Chào: <b><?php echo $this->session->userdata('customer_login')->fullname; ?></b></a></li>
                            <li><a href="login/logOut"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li><?php
                        } ?>


                    </ul>
                </div>
            </div>
            <!--language-->
        </div>
    </div>
</div> <!-- End header area -->

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="">Sign in</a></li>
            <li><a href="">New account</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form id="form" class="cd-form" action="" method="get">
                <input type="hidden" name="action" value="cus_login">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email"  required name="username" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text" required name="password" placeholder="Password">
                    <a href="" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset" id="submit">
                    <input class="full-width" type="submit" name="login_submit" value="Login">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->



        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form" id="frm-regis" action="" method="get">
                <input type="hidden" name="action" value="cus_regis">

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-name">Full Name</label>
                    <input class="full-width has-padding has-border" id="signup-name" type="text" name="name" required placeholder="Name">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="text" name="email" required placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text" name="password" required placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">Phone Number</label>
                    <input class="full-width has-padding has-border" id="signup-phone" type="text" name="phone" required placeholder="Phone">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset" id="submits">
                    <input class="full-width has-padding" type="submit" value="Create account">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->



        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form" action="" method="get">
                <input type="hidden" name="action" value="resetPassword">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" name="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->




<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="<?php echo base_url().'home'; ?>"><img src="<?php echo public_front_url()?>/img/logo.png"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="<?php echo base_url().'cart' ?>">Giỏ hàng</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $this->cart->total_items(); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

<section class="content">
    <?php $this->load->view('front/layout/menu'); ?>
</section>

<section class="content">
    <?php $this->load->view($content) ?>
</section>

<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->




<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?php echo public_front_url()?>/js/owl.carousel.min.js"></script>
<script src="<?php echo public_front_url()?>/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?php echo public_front_url()?>/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?php echo public_front_url()?>/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="<?php echo public_front_url()?>/js/bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo public_front_url()?>/js/script.slider.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


<script src="https://uhchat.net/code.php?f=9f1ce5"></script>
<script type="text/javascript" src="<?php echo public_front_url()?>/popup_login/js/main.js"></script>


</body>
</html>