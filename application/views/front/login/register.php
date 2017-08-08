<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Khách Hàng Đăng Nhập</title>
    <script src="<?php echo public_url() ?>/login/js/jquery.min.js"></script>
    <script src="<?php  echo public_url();?>/js/pages/jquery.validate.min.js"></script>
    <script src="<?php  echo public_url();?>/js/pages/common.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo public_url() ?>/login/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
<!--header start here-->
<div class="header">
    <div class="header-main">
        <h1>Tạo Tài Khoản</h1>
        <div class="header-bottom">
            <div style="color: red;text-align: center;">
                <?php echo $this->session->flashdata('fail_login'); ?>
                <?php echo $this->session->flashdata('flash_message'); ?>
            </div>
            <div class="header-right w3agile">
                <div class="header-left-bottom agileinfo">
                    <form id="frm_regis_user" action="register/regis" method="post">
                        <input type="text" required  name="username" placeholder="Tài khoản" />
                        <input type="password" required name="password" placeholder="Mật khẩu" />
                        <input type="password" required name="re_password" placeholder="Nhập lại mật khẩu" />
                        <input type="text" required name="fullname" placeholder="Họ và tên" />
                        <input type="text" required name="email" placeholder="Email" />
                        <input type="text" required name="address" placeholder="Address" />
                        <input type="text" required name="phone" placeholder="Phone Number" />
                        <div class="remember">

                            <div class="forgot" style="text-align: center">
                                <h6><a href="login">Bạn đã có tài khoản</a></h6>
                            </div>
                            <div class="clear"> </div>
                        </div>

                        <input name="login" type="submit" value="Tạo tài khoản">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--header end here-->
<div class="copyright">
    <p>© 2017 Ustora mobile | Design by Team 14 </a></p>
</div>
<!--footer end here-->
</body>
</html>
<script type="text/javascript">
    function DelayRedirect() {
        var seconds = 5;
        var dvCountDown = document.getElementById("dvCountDown");
        var lblCount = document.getElementById("lblCount");
        dvCountDown.style.display = "block";
        lblCount.innerHTML = seconds;
        setInterval(function () {
            seconds--;
            lblCount.innerHTML = seconds;
            if (seconds == 0) {
                dvCountDown.style.display = "none";
                window.location = "http://www.aspsnippets.com/";
            }
        }, 1000);
    }
</script>
