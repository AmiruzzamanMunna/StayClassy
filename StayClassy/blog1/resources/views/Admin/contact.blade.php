@extends('layouts.Admin-Home')
@section('title')
	Contact
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post">
			<div class="card">
				{{csrf_field()}}
				@forelse($contact as $contact)
				<div class="card-header"><h2>Contact Information</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Heading:</label>
						<input type="text" class="form-control col-md-6" name="heading">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Contact Number:</label>
						<input type="number" class="form-control col-md-6" name="contactnumber">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Email:</label>
						<input type="email" class="form-control col-md-6" name="email">
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="button" class="btn btn-primary" name="" value="Save"><a style="color: white" href="{{route('footer.contactedit',[$contact->id])}}">Edit</a></button>
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