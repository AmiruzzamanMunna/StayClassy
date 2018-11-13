@extends('layouts.Admin-Home')
@section('title')
	Return Policy
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post">
			<div class="card">
				{{csrf_field()}}
				@forelse($return as $return)
				<div class="card-header"><h2>Update Return Policy</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Heading:</label>
						<input type="text" class="form-control col-md-6" name="heading" value="{{$return->heading}}">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Title:</label>
						<input type="text" class="form-control col-md-6" name="title" value="{{$return->title}}">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Description:</label>
						<textarea name="description" rows="6" class="form-control col-md-6" value="{{$return->description}}"></textarea>
					</div>
					<div class="row">
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Update">
						</div>
						@empty
						@endforelse
					</div>
					<div class="col-md-6 m-auto">
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