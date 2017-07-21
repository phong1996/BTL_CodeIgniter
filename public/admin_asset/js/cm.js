/*var url_root = 'http://localhost/BTL_CodeIgniter/';*/
$(document).ready(function() {
    $(".user_status").click(function () {
        alert('123');
        /*var user_status = 0;
        if ($(this).prop('checked') === true) {
            user_status = 1;
        } else {
            user_status = 0;
        }
        alert(user_status)
        $.ajax({
            type: "post",
            dataType: "json",
            url: url_root + "admin/controllers/user_controller.php?action=ajaxUpdateUserStatus",
            data: {userId: $(this).attr('user_id'), user_status: user_status},
            beforeSend: function () {
                $('.loading_popup').show();
            },
            success: function (result) {
                $('.loading_popup').hide();
                //$("#div1").html(result);
            }
        });*/
    });
});
