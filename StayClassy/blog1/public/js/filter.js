$(document).ready(function() {
	$('.categoriesall').click(function(event) {
		if(this.checked){
			var selectedCats = [];
			var n = jQuery(".categories:checked").length;
			if (n > 0) {
				jQuery(".categories:checked").each(function () {
					this.checked=true;
					selectedCats.push($(this).val());
				});
			}
			console.log(selectedCats);
			$.ajax({
				url:'/ajax/catFilter',
				method:'GET',
				data:{
					catList:selectedCats,
				},
				success:function (response) {
					$("#product-list").html(response);
				}
			});
			}
		else{
				this.checked=false;
			}
	});
	$(".categories").click(function() {
		var selectedCats = [];
		var n = jQuery(".categories:checked").length;
		if (n > 0) {
			jQuery(".categories:checked").each(function () {
				selectedCats.push($(this).val());
			});
		}
		console.log(selectedCats);
		$.ajax({
			url:'/ajax/catFilter',
			method:'GET',
			data:{
				catList:selectedCats,
			},
			success:function (response) {
				$("#product-list").html(response);
			}
		});
	})
});
$(document).ready(function() {
	$(".type").click(function() {
		var selectedType = [];
		var n = jQuery(".type:checked").length;
		if (n > 0) {
			jQuery(".type:checked").each(function () {
				selectedType.push($(this).val());
			});
		}
		console.log(selectedType);
		$.ajax({
			url:'/ajax/typeFilter',
			method:'GET',
			data:{
				Type:selectedType,
			},
			success:function (response) {
				$("#product-list").html(response);
			}
		});
	});
});