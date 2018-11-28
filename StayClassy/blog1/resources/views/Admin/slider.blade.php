@extends('layouts.Admin-Home')
@section('title')
	Slider
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="card">
				<div class="card-header"><h2>Slider Images</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Slider1:</label>
						<input type="file" class="form-control col-md-6" name="image1" id="image1">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Slider2:</label>
						<input type="file" class="form-control col-md-6" name="image2" id="image2">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Slider3:</label>
						<input type="file" class="form-control col-md-6" name="image3" id="image3">
					</div>
					<div class="row">
						<div class="col-md-3">
							@foreach($slider as $slider)
							<a href="{{route('layout.slideredit',$slider->id)}}" class="btn btn-warning">Edit</a>
							@break
							@endforeach
						</div>
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Update">
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="row">
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