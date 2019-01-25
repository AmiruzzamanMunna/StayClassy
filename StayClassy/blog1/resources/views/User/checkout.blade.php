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
			<div class="col-md-8 m-auto">
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
									<input type="number" class="form-control" name="mobile1">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3">Mobile No(2):</label>
								<div class="col-md-8">
									<input type="number" class="form-control" name="mobile2">
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
			<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="card cd col-md-3">
									<div class="card-header">
										<a href="{{route('user.cartshow')}}"><img id="cart" src="{{asset('images')}}/admin/order.png"></a>
										<p>Items:{{Cart::count()}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
@endsection