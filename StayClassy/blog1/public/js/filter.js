$(document).ready(function() {
	$(".categories").click(function() {
		var x=$(this).val();
		alert(x);
		$.ajax({
			url:'/product',
			method:'GET',
			data:{
				a:x
			},
			success:function (response) {
				// alert("success");
			}
		});
	})
});
$(document).ready(function() {
	$(".type").click(function() {
		var y=$(this).val();
		alert(y);
	});
});