@extends('layouts.Admin-Home')
@section('title')
	Update Product Quantity
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style9.css">
@endsection
@section('container')
	<div class="col-md-6 cat">
		<form method="post">
			{{csrf_field()}}
			<div class="card crd">
					<h4 class="m-auto">Product Id:</h4>
				<div class="card-body">
					
					<div class="form-group row">
						<label class="col-md-6">Quantity:</label>
						<input type="text" name="Quantity" value="">
						@if($errors->any())
							@foreach($errors->all() as $error)
								<li class="m-auto">{{$error}}</li>
							@endforeach
						@endif
					</div>
					<div class=" form-group row">
						<div class="col-md-7 m-auto">
							<button type="submit" id="add-cart-button" class="btn btn-success col-md-8">Update Quantity</button>
						</div>
					</div>
				</div>
				<div class="card-footer">
					@if(session('message'))
						<div class="alert alert-success m-auto">
							{{session('message')}}
						</div>
					@endif
				</div>
			</div>
		</form>
	</div>
@endsection