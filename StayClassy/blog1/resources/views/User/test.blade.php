@extends('layouts.User-Home')
@section('title')
	Email
@endsection
@section('container')
<div class="col-md-6 m-auto"><br><br><br><br><br><br>
	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			<form action="{{route('Mail.mail')}}" method="POST">
     		{{ csrf_field() }}
		      	<div class="form-group row">
					<label class="col-md-3">Email:</label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="Email">
					</div>
				</div>
				<div class="col-md-3 ml-auto">
					<input type="submit" class="btn btn-success" name="" value="Reset Password">
				</div>
    		</form>
		</div>
	</div>
</div>
@endsection