$(document).ready(function() {
	$("#tx1").hide();
	$("#bt2").hide();
	$("#bt3").hide();
	$("#th1").hide();
	$("#tx2").hide();
	$("#bt4").hide();
	$("#bt5").hide();
	$("#th2").hide();
	$("#bt1").click(function () {
	$("#tx1").show();
	$("#bt2").show();
	$("#bt3").show();
	$("#th1").show();
	$("#bt1").hide();
	})
	$("#bt3").click(function() {
	$("#tx2").show();
	$("#bt4").show();
	$("#bt5").show();
	$("#th2").show();
	$("#bt3").hide();
	})
	$("#bt2").click(function () {
		$("#th1").hide();
		$("#tx1").hide();
		$("#bt2").hide();
		$("#bt3").hide();		
		$("#bt1").show();		
	})
	$("#bt4").click(function () {
		$("#th2").hide();
		$("#tx2").hide();
		$("#bt4").hide();
		$("#bt5").hide();		
		$("#bt3").show();		
	})
	
	$("#addproduct-form").validate({
		rules:{
			pname:{
				required:true
			},
			code:{
				required:true,
				// code:true	
			},
			sold_item:{
				required:true,
			},
			buyprice:{
				required:true,
				// buyprice:true
			},
			price:{
				required:true,
				// price:true
			},
			quantity:{
				required:true,
				// quantity:true
			},
			new:{
				required:true,
				// new:true
			},
			category:{
				required:true,
				minlength:1
			},
			type:{
				required:true,
				minlength:1
			},
			img1:{
				required:true,
				// img1:true
			},
			img2:{
				required:true,
				// img2:true
			},
			img3:{
				required:true,
				// img3:true
			},
			status:{
				required:true,
				// status:true
			},
			spec:{
				required:true,
				// spec:true
			},

		}
	});
	$('#img1').change(function (event) {
  	  var output = $("#src1")[0];
    	output.src = URL.createObjectURL(event.target.files[0]);
	});
	$('#img2').change(function (event) {
  	  var output = $("#src2")[0];
    	output.src = URL.createObjectURL(event.target.files[0]);
	});
	$('#img3').change(function (event) {
  	  var output = $("#src3")[0];
    	output.src = URL.createObjectURL(event.target.files[0]);
	});
});
