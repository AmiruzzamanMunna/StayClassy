@extends('layouts.Admin-Home')
@section('title')
	Social
@endsection
@section('container')
	<div class="col-md-8"><br><br><br><br>
		<form action="" method="post">
			<div class="card">
				<div class="card-header"><h2>Social</h2></div>
				<div class="card-body">
					{{csrf_field()}}
					<div class="form-group row">
						@forelse($social as $social)
						<label class="col-md-4">FaceBook:</label>
						<input type="text" class="form-control col-md-6" name="facebook">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Twitter:</label>
						<input type="text" class="form-control col-md-6" name="twitter">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Instagram:</label>
						<input type="text" class="form-control col-md-6" name="instagram">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Youtube:</label>
						<input type="text" class="form-control col-md-6" name="youtube">
						</div>
					<div class="row">
						<div class="col-md-3">
							<button type="button" class="btn btn-primary" name="" value=><a style="color: white" href="{{route('footer.edit',[$social->id])}}">Edit</a></button>
						</div>
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Save">
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