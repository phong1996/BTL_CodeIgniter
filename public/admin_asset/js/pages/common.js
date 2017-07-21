

var url_root = 'http://localhost/BTL_CodeIgniter/';
    $(".user_status").click(function () {
        var user_status = 0;
        if ($(this).prop('checked') === true) {
            user_status = 1;
        } else {
            user_status = 0;
        }
        $.ajax({
            type: "post",
            dataType: "json",
            url: url_root + "admin/Users/ajaxUpdateUserStatus",
            data: {userId: $(this).attr('user_id'), user_status: user_status},
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (result) {
                $('.loading').hide();
            }
        })
    });


    jQuery.validator.addMethod("special_character", function (value, element) {
        return /[a-zA-Z0-9]+$/.test(value);
    });


    jQuery.validator.addMethod("number_format", function (value, element) {
        return /[0-9]+$/.test(value);
    });


    jQuery.validator.addMethod("email_validate", function (value) {
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]$/i);
        return pattern.test(value);
    });

    $("#frm-regis").validate({
        rules: {
            username: {
                required: true,
                minlength: 6,
                maxlength: 50,
                remote: {
                    url: url_root +"admin/Users/checkuser",
                    type: "post",
                    data: {
                        username: function () {
                            return $("#username").val();
                        },
                        id:$('#id').val(),
                    }
                }
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 50
                },
                fullname: {
                    required: true,
                    minlength: 6,
                    maxlength: 50

                },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: url_root +"admin/Users/checkemail",
                        type: "post",
                        data: {
                            email: function () {
                                return $("#email").val();
                            },
                            id:$('#id').val(),
                        }
                    }
                },
                address: {
                    required: true,
                    minlength: 6,
                    maxlength: 500
                },
                sdt: {
                    required: true,
                    number_format: true,
                    minlength: 10,
                    maxlength: 12
                }
            },
            messages: {
                username: {
                    required: 'Vui lòng nhập tên tài khoản!',
                    minlength: 'Tối thiểu 6 ký tự!',
                    maxlength: 'Tối đa 50 ký tự!',
                    remote: 'Tài khoản đã tồn tại'
                },
                password: {
                    required: 'Vui lòng nhập mật khẩu!',
                    minlength: 'Tối thiểu 6 ký tự!',
                    maxlength: 'Tối đa 50 ký tự!'
                },
                fullname: {
                    required: 'Vui lòng nhập họ và tên!',
                    minlength: 'Tối thiểu 6 ký tự!',
                    maxlength: 'Tối đa 50 ký tự!'
                },
                email: {
                    required: 'Vui lòng nhập email!',
                    email: 'Định dạng email không đúng, xin vui lòng nhập lại!',
                    remote: 'Email đã tồn tại'
                },
                address: {
                    required: 'Vui lòng nhập địa chỉ!',
                    minlength: 'Tối thiểu 6 ký tự!',
                    maxlength: 'Tối đa 500 ký tự!'
                },
                sdt: {
                    required: 'Vui lòng nhập SDT!',
                    number_format: 'Không đúng dịnh dạng số! Xin vui lòng thử lại!',
                    minlength: 'Tối thiểu 10 ký tự!',
                    maxlength: 'Tối đa 12 ký tự!'
                }
            }
    });




