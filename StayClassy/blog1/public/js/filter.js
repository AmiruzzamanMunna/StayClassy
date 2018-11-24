$(document).ready(function() {
	$(".cat").click(function() {
		var x=$(".categories").val();
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
	$(".typ").click(function() {
		var y=$("#type").val();
		alert(y);
	})
})