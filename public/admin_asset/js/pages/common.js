jQuery.validator.addMethod("special_character", function(value, element) {
    return  /[a-zA-Z0-9]+$/.test(value);
});


jQuery.validator.addMethod("number_format", function(value, element) {
    return  /[0-9]+$/.test(value);
});


jQuery.validator.addMethod("email_validate", function(value) {
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]$/i);
    return pattern.test(value);
});

$("#frm-regis").validate({
    rules: {
        username: {
            required: true,
            minlength: 6,
            maxlength: 50,
        },
        password: {
            required: true,
            minlength: 6,
            maxlength: 50
        },
        fullname:{
            required: true,
            minlength: 6,
            maxlength: 50
        },
        email:{
            required: true,
            email: true
        },
        address:{
            required: true,
            minlength: 6,
            maxlength: 500
        },
        sdt:{
            required: true,
            number_format: true,
            minlength: 10,
            maxlength: 12
        }
    },
    messages:{
        username: {
            required: 'Vui lòng nhập tên tài khoản!',
            minlength: 'Tối thiểu 6 ký tự!',
            maxlength: 'Tối đa 50 ký tự!',
        },
        password: {
            required: 'Vui lòng nhập mật khẩu!',
            minlength: 'Tối thiểu 6 ký tự!',
            maxlength: 'Tối đa 50 ký tự!'
        },
        fullname:{
            required: 'Vui lòng nhập họ và tên!',
            minlength: 'Tối thiểu 6 ký tự!',
            maxlength: 'Tối đa 50 ký tự!'
        },
        email:{
            required: 'Vui lòng nhập email!',
            email:'Định dạng email không đúng, xin vui lòng nhập lại!'
        },
        address:{
            required: 'Vui lòng nhập địa chỉ!',
            minlength: 'Tối thiểu 6 ký tự!',
            maxlength: 'Tối đa 500 ký tự!'
        },
        sdt:{
            required:  'Vui lòng nhập SDT!',
            number_format: 'Không đúng dịnh dạng số! Xin vui lòng thử lại!',
            minlength: 'Tối thiểu 10 ký tự!',
            maxlength: 'Tối đa 12 ký tự!'
        }
    }

});
