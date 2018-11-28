@extends('layouts.Admin-Home')
@section('title')
	Right
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card">
				{{csrf_field()}}
				<div class="card-header"><h2>Right image</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Right Image:</label>
						<input type="file" class="form-control col-md-6" name="image1" id="image1">
					</div>
					<div class="row">
						<div class="col-md-5 m-auto">
							@foreach($rights as $right)
							<a href="{{route('layout.rightedit',[$right->id])}}" class="btn btn-warning">Edit</a>
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