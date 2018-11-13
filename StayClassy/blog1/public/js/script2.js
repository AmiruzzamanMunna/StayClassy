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
				if (response == 1) {
					alert("Added");
				}else{
					alert("Failed");
				}
			},
			error: function(data){
				alert("error"+data.status);
			},

		});
	});
	return false;
});