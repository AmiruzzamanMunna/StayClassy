<!DOCTYPE html>
<html>
<head>
    <title>PHP Laravel 5.6 - how to delete multiple rows in mysql using checkbox</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>


<div class="container">
    <h3>PHP Laravel 5.6 - delete multiple records by selecting checkboxes using javascript</h3>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url="">Delete All</button>
    <table class="table table-bordered">
        <tr>
            <th><input type="checkbox" id="check_all"></th>
            <th>S.No.</th>
            <th>Category Name</th>
            <th>Category Details</th>
            <th width="100px">Action</th>
        </tr>
        @if($categories->count())
            @foreach($categories as $key => $category)
                <tr id="tr_{{$category->id}}">
                    <td><input type="checkbox" class="checkbox" data-id="{{$category->id}}"></td>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->nam }}</td>
                    <td>{{ $category->num }}</td>
                    <td>
                        {!! Form::open() !!}

                            {!! Form::button('Delete', ['class' => 'btn btn-danger btn-xs','data-toggle'=>'confirmation','data-placement'=>'left']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
</div> 

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
                        url: "{{route('test.deletelist')}}",
                        type: 'delete',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+strIds,
                        success: function (data) {
                            // if (data['status']==true) {
                            //     $(".checkbox:checked").each(function() {  
                            //         $(this).parents("tr").remove();
                            //     });
                            //     alert(data['message']);
                            // } else {
                            //     alert('Whoops Something went wrong!!');
                            // }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                }  
            }  
        });

        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });   
    
    });
</script>


</html>