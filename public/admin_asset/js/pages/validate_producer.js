$('body').on('change', '#producer_status',function () {
	var id=$(this).attr('producer_id');
	// $.ajax({
	// 	url: '',
	// 	type: 'POST',
	// 	data: {id: id},
	// });
	
})


$('#form_producer').validate({
	rules:{
		name:{
			required:true,
			maxlength:100,
			minlength:2,
			remote:
			{
				url: "../producer/checkname",
				type: "post",
				data: {
					name: function() {
						return $( "#name" ).val();
					}
				}
			}
		},
		logo:{
			required:true,
		}
	},
	messages:{
		name:{
			required:"Tên không được để trống",
			maxlength:"Tên phải từ 2->100 ký tự",
			minlength:"Tên phải từ 2->100 ký tự",
			remote:"Tên này đã được sử dụng"
		},
		logo:{
			required:"logo không được để trống"
		}
	}
});

