<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{asset('css')}}/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/popper.min.js"></script>
	<script src="{{asset('js')}}/bootstrap.min.js"></script>
	<script src="{{asset('js')}}/owl.carousel.min.js"></script>
	<script src="{{asset('js')}}/owl.carousel.js"></script>
	<script src="{{asset('js')}}/script.js"></script>
	<script src="{{asset('js')}}/ajax.js"></script>
</head>
<body>
	<table>
		<tr>
			<th><input type="checkbox" id="check_all"></th>
		<th>id</th>
		<th>nam</th>
		<th>num</th>
		</tr>
		
	</table>
	<table>
		@foreach($tests as $test)
			<tr>
				<input type="checkbox" value="{{$test->id}}">
			</tr>
			<tr>{{$test->nam}}</tr>
			<tr>{{$test->num}}</tr>
		@endforeach
	</table>
		<input type="text" id="nam">
		<input type="text" id="num">
		<button class="button">asdfasdf</button>
	
</body>
<script type="text/javascript">
    $(document).ready(function () {

        $('#check_all').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".checkbox").prop('checked', true);  
         } else {  
            $(".checkbox").prop('checked',false);  
         }  
        });

         $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#check_all').prop('checked',true);
            }else{
                $('#check_all').prop('checked',false);
            }
         });

        $('.delete-all').on('click', function(e) {


            var idsArr = [];  
            $(".checkbox:checked").each(function() {  
                idsArr.push($(this).attr('data-id'));
            });  


            if(idsArr.length <=0)  
            {  
                alert("Please select atleast one record to delete.");  
            }  else {  

                if(confirm("Are you sure, you want to delete the selected categories?")){  

                    var strIds = idsArr.join(","); 

                    $.ajax({
                        url: "",
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+strIds,
                        success: function (data) {
                            if (data['status']==true) {
                                $(".checkbox:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                }  
            }  
        });

        // $('[data-toggle=confirmation]').confirmation({
        //     rootSelector: '[data-toggle=confirmation]',
        //     onConfirm: function (event, element) {
        //         element.closest('form').submit();
        //     }
        // });   
    
    });
</script>

<script type="text/javascript">
	$('button').click(function(){
		var a=$('#nam').val();
		var b=$('#num').val();
		$.ajax({
			type:'GET',
			url:'{{route("test.getValues")}}',
			data:{
				'nam':a,
				'num':b,
			},
			success:function(response){
			},
			error: function(data){
				alert(data);
			},
		});
	});
</script>
</html>