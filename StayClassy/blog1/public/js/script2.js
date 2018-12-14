$(document).ready(function() {
	$('#add-cart-button').click(function () {
		var x=$("#add-cart-quantity").val();
		var y=$("#add-cart-id").val();
		$.ajax({
			url: '/ajax/addCart',
			method: 'GET',
			data: {
				id: y,
				qnt: x,
			},
			success: function(response) {
				if (response >= 0) {
					$('#item').html(response);
				}else{
					alert("You Need to Login");
				}
			},
			error: function(data){
				alert("Sorry Stock is not Available");
			},

		});
	});
	return false;
});
$(document).ready(function () {
	$("#datepicker1").on('click', function() {
		alert();
  	});
	// 	var a=$("#datepicker").datepicker('getDate');
	// 	var b=$("#datepicker1").datepicker('getDate');
	// 	alert(a);
	// 	alert(b);
	// 	$.ajax({
	// 		url:'/ajax/transection',
	// 		method:'GET',
	// 		data:{
	// 			startDate=a,
	// 			endDate=b,
	// 		},
	// 		success:function () {
				
	// 		},
	// 		error:function (data) {
	// 			alert("error"+data.status);
	// 		},
	// 	});
	// });
	// return false;
});