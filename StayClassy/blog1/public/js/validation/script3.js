$(document).ready(function() {
	$("#stuff-form").validate({
		rules:{
			name:{
				required:true,
				minlength:5,
				username:true	
			},
			username:{
				required:true,
				minlength:5,
				username:true
			},
			phone:{
				required:true,
				minlength:11
			},
			email:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:5,
				password:true
			},
			confirm_password:{
				required:true,
				minlength:5,
				equalTo:"#password"
			}
		},

		messages:{
			name:{
				required:"Please Enter the Name",
				minlength:"Minimum Length is 5"
			},
			usrname:{
				required:"Please Enter a User Name",
				minlength:"Minimum Length is 5"
			},
			phn:{
				required:"Please Enter the Phone Number",
				minlength:"Minimum Length is 11"
			},
			email:{
				required:"Please Enter a Valid Email Address",
				// minlength:"Minimum Length is 11"
			},
			password:{
				required:"Please Enter a password",
				minlength:"Minimum Length is 5"
			},
			confirm_password:{
				required:"Password Doesn't Match",
				minlength:"Minimum Length is 5"
			}
		}

	});
});
