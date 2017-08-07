<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>
<body>
<!--<input type="button" value="Redirect" onclick="DelayRedirect()" />-->

<div id="dvCountDown" style="display: none">
    Đăng Ký thành công, chuyển hướng sau: <span id="lblCount"></span>&nbsp;giây.....
</div>
<script type="text/javascript">
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
                window.location = "<?php echo base_url()?>login";
            }
        }, 1000);
</script>
</body>
</html>
