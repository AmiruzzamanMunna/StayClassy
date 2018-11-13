@extends('layouts.Admin-Home')
@section('title')
	Customer Service
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post">
			<div class="card">
				{{csrf_field()}}
				@forelse($customer as $customer)
				<div class="card-header"><h2>Customer Service</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Heading:</label>
						<input type="text" class="form-control col-md-6" name="heading">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Title:</label>
						<input type="text" class="form-control col-md-6" name="title">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Description:</label>
						<textarea name="description" rows="6" class="form-control col-md-6"></textarea>
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="button" class="btn btn-primary" name="" value="Save"><a style="color: white;" href="{{route('footer.customeredit',[$customer->id])}}">Edit</a></button>
						</div>
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Save">
						</div>
					</div>
					@empty
					@endforelse
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