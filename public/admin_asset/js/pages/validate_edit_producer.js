$('#file_edit').change(function(event) {
    $('#img_logo').attr('src',URL.createObjectURL(event.target.files[0]));
});


$('#form_producer_edit').validate({
	rules:{
		name:{
			required:true,
			maxlength:100,
			minlength:2,
			remote:
			{
				url: "../../producer/checkname",
				type: "post",
				data: {
					name: function() {
						return $( "#name" ).val();
					},
					id: function() {
						return $( "#id" ).val();
					}
				}
			}
		},
	},
	messages:{
		name:{
			required:"Tên không được để trống",
			maxlength:"Tên phải từ 2->100 ký tự",
			minlength:"Tên phải từ 2->100 ký tự",
			remote:"Tên này đã được sử dụng"
		},
	}
});

