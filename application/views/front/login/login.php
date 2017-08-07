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
		       <h1>Khách Hàng Đăng Nhập</h1>
			<div class="header-bottom">
				<div style="color: red;text-align: center;">
					<?php echo $this->session->flashdata('fail_login'); ?>
				</div>
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
					 <form action="login/login" method="post">
						<input type="text" name="username" placeholder="Tài khoản" />
						<input type="password" name="password" placeholder="Mật khẩu" />
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="remember" ><i> </i>Duy trì đăng nhập</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Quên mật khẩu?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input name="login" type="submit" value="Đăng Nhập">
					</form>	
					<div class="header-left-top">
						<div class="sign-up"> <h2>Hoặc</h2> </div>
					
					</div>
					<div class="header-social wthree">
							<a href="#" class="face"><h5>Facebook</h5></a>
							<a href="#" class="twitt"><h5>Twitter</h5></a>
						</div>
						
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