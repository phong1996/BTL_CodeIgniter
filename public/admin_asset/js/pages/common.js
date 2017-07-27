

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

    $(".slide_status").click(function () {
        var slide_status = 0;
        if ($(this).prop('checked') === true) {
            slide_status = 1;
        } else {
            slide_status = 0;
        }
        $.ajax({
            type: "post",
            dataType: "json",
            url: url_root + "admin/slide/ajaxUpdateSlideStatus",
            data: {slideId: $(this).attr('slide_id'), slide_status: slide_status},
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (result) {
                $('.loading').hide();
            }
        })
    });

    $(".news_status").click(function () {
        var news_status = 0;
        if ($(this).prop('checked') === true) {
            news_status = 1;
        } else {
            news_status = 0;
        }
        $.ajax({
            type: "post",
            dataType: "json",
            url: url_root + "admin/Technews/ajaxUpdateNewsStatus",
            data: {newsId: $(this).attr('news_id'), news_status: news_status},
            beforeSend: function () {
                $('.loading').show();
            },
            success: function (result) {
                $('.loading').hide();
            }
        })
    });

    $(".img").click(function(){
        var img=$(this);
        $.ajax({
           type: "post",
            dataType: "json",
            url: url_root + "admin/Products/ajaxDeleteImage",
            data:{imgId: $(this).attr('img_id')},
            beforeSend: function () {
                $('.loading').show();
            },
            success: function () {
               img.hide()
            }
        });
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
    $("#form_slide").validate({
    rules: {
        images: {
            required: true
        },
        link: {
            required: true,
            minlength: 6,
            maxlength: 50
        }
    },
    messages: {
        images: {
            required: 'Vui lòng chọn ảnh!',
        },
        link: {
            required: 'Vui lòng nhập link!',
            minlength: 'Tối thiểu 6 ký tự!',
            maxlength: 'Tối đa 50 ký tự!'
        }
    }
});
    $("#form_slide_edit").validate({
    rules: {
        link: {
            required: true,
            minlength: 6,
            maxlength: 50
        }
    },
    messages: {
        link: {
            required: 'Vui lòng nhập link!',
            minlength: 'Tối thiểu 6 ký tự!',
            maxlength: 'Tối đa 50 ký tự!'
        }
    }
});
    $("#frm-news-add").validate({
        rules: {
            title: {
                required: true
            },
            intro: {
                required: true
            },
            content: {
                required: true
            },
            images: {
                required: true
            }
        },
        messages: {
            title: {
                required: 'Vui lòng nhập tên tiêu đề!'
            },
            intro: {
                required: 'Vui lòng nhập giới thiệu!'
            },
            content: {
                required: 'Vui lòng nhập nội dung!'
            },
            images: {
                required: 'Vui lòng chọn hình ảnh!'
            }
        }
});
$("#frm_pr_add").validate({
        rules: {
            producer: {
                required: true
            },
            name: {
                required: true
            },
            price: {
                required: true
            },
            quantyti: {
                required: true
            },
            images: {
                required: true
            },
            sale_off: {
                required: true
            },
            description: {
                required: true
            },
            display: {
                required: true
            },
            camera: {
                required: true
            },
            operating: {
                required: true
            },
            storage: {
                required: true
            },
            network: {
                required: true
            },
            design: {
                required: true
            },
            battery: {
                required: true
            },
            utilities: {
                required: true
            }
        },
        messages: {
            producer: {
                required: 'Không được bỏ trống'
            },
            name: {
                required: 'Không được bỏ trống'
            },
            price: {
                required: 'Không được bỏ trống'
            },
            quantyti: {
                required: 'Không được bỏ trống'
            },
            images: {
                required: 'Không được bỏ trống'
            },
            sale_off: {
                required: 'Không được bỏ trống'
            },
            description: {
                required: 'Không được bỏ trống'
            },
            display: {
                required: 'Không được bỏ trống'
            },
            camera: {
                required: 'Không được bỏ trống'
            },
            operating: {
                required: 'Không được bỏ trống'
            },
            storage: {
                required: 'Không được bỏ trống'
            },
            network: {
                required: 'Không được bỏ trống'
            },
            design: {
                required: 'Không được bỏ trống'
            },
            battery: {
                required: 'Không được bỏ trống'
            },
            utilities: {
                required: 'Không được bỏ trống'
            }
        }
});

$('#file_edit').change(function(event) {
    $('#image').attr('src',URL.createObjectURL(event.target.files[0]));
});





