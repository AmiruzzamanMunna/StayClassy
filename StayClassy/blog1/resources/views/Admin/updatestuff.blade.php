@extends('layouts.Admin-Home')
@section('title')
	Update Stuff
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/stufflist.css">
@endsection
@section('container')
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">Update Profile</div>
			<div class="card-body">
				@forelse($stuffs as $stuff)
				<form action="" name="" method="POST">
					{{csrf_field()}}
					<div class="form-group row">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Name:</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="name" value="{{$stuff->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Username:</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="username" value="{{$stuff->username}}" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Phone:</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="phone" value="{{$stuff->phone}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Email:</label>
						<div class="col-md-6">
							<input type="email" class="form-control" name="email" value="{{$stuff->email}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Password:</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password" value="{{$stuff->password}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-4">Confirm Password:</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="confirm_password" value="{{$stuff->confirm_password}}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Update">
						</div>
					</div>
				</form>
				@empty
				@endforelse
			</div>
			<div class="card-footer">
				<div class="col-md-6 m-auto">
					@if(session('message'))
					<div class="alert alert-success m-auto">
						{{session('message')}}
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection