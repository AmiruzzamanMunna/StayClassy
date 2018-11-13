@extends('layouts.User-Home')
@section('title')
	CheckOut
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style8.css">
@endsection
@section('script')
<script src="{{asset('js')}}/jquery.validate.min.js"></script>
<script src="{{asset('js')}}/validation/script5.js"></script>
@endsection
@section('container')
	<div class="container">
		<div class="row">
			<div class="col-md-8 mr-auto">
				<form action="" method="POST" id="checkout-form">
					{{csrf_field()}}
					<div class="card crd">
						<div class="card-header"><h2>Delivery Details</h2></div>
						<div class="card-body">
							<div class="form-group row">
								<label class="col-md-3">Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="name">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Mobile No(1):</label>
								<div class="col-md-8">
									<input type="number" class="form-control" name="mb1">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Mobile No(2):</label>
								<div class="col-md-8">
									<input type="number" class="form-control" name="mb2">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Address:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="address">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">E-Mail:</label>
								<div class="col-md-8">
									<input type="email" class="form-control" name="email">
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
							</div>
						</div>
					</div>			
				</form>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="card card1">
							<div class="card-header">Product Details</div>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-md-6">Product Code</label>
									<label class="col-md-6">{{$product->code}}</label>
								</div>
								<div class="form-group row">
									<label class="col-md-6">Product Name</label>
									<label class="col-md-6">{{$product->product_name}}</label>
								</div>
								<div class="form-group row">
									<label class="col-md-6">Total Price</label>
									<label class="col-md-6">{{$product->product_price}}</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection