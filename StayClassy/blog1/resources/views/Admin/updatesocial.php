@extends('layouts.Admin-Home')
@section('title')
	Update Social
@endsection
@section('container')
	<div class="col-md-8"><br><br><br><br>
		<form action="" method="post">
			<div class="card">
				<div class="card-header"><h2>Update Social</h2></div>
				<div class="card-body">
					{{csrf_field()}}
					<div class="form-group row">
						<label class="col-md-4">FaceBook:</label>
						<input type="text" class="form-control col-md-6" name="facebook"
						value="{{$social->facebook}}">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Twitter:</label>
						<input type="text" class="form-control col-md-6" name="twitter" value="{{$social->twitter}}">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Instagram:</label>
						<input type="text" class="form-control col-md-6" name="instagram" value="{{$sociall->instagram}}">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Youtube:</label>
						<input type="text" class="form-control col-md-6" name="youtube" value="{{$social->youtube}}">
						</div>
					<div class="row">
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Save">
						</div>
					</div>
					<div class="col-md-6">
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