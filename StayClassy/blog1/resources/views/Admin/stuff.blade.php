@extends('layouts.Admin-Home')
@section('title')
	Add Stuff
@endsection
@section('script')
	<script src="{{asset('js')}}/validation/script3.js"></script>
	<script src="{{asset('js')}}/jquery.validate.min.js"></script>
@endsection
@section('container')
	<div class="col-md-8"><br><br>
		<form action="" method="POST" id="stuff-form">
			{{csrf_field()}}
			<div class="card">
				<div class="card-header"><h2>New Member</h2></div>
				<div class="card-body">
						<div class="form-group row">
							<label class="col-md-4">Name:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="name">
							</div>
							
						</div>
						<div class="form-group row">
							<label class="col-md-4">User Name:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="username">
							</div>
							
						</div>
						<div class="form-group row">
							<label class="col-md-4">Phone:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="phone">
							</div>
							
						</div>
						<div class="form-group row">
							<label class="col-md-4">Email:</label>
							<div class="col-md-8">
								<input type="email" class="form-control" name="email">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4">Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-4">Confirm Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="confirm_password">
							</div>
						</div>
							@if($errors->any())
								<ul>
									@foreach($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							@endif
						<div class="row">
							<div class="col-md-9">
								<input type="reset" class="btn btn-danger" name="" value="Reset">
							</div>
						<div class="col-md-3">
							<input type="submit" class="btn btn-success" name="" value="Confirm">
						</div>
						@if(session('message'))
							<div class="alert alert-success m-auto">
								{{session('message')}}
							</div>
						@endif
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection