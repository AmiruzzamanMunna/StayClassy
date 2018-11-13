$(document).ready(function() {
	$("#register").validate({
		rules:{
			username:{
				required:true,
				minlength:5,
				username:true
			},
			password:{
				required:true,
				minlength:5,
				password:true
			}
		},

		messages:{
			username:{
				required:"Please Enter a User Name",
				minlength:"Minimum Length is 5"
			},
			password:{
				required:"Please Enter a password",
				minlength:"Minimum Length is 5"
			}
		}

	});
});
