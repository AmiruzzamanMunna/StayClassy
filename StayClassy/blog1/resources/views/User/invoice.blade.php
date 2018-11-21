@extends('layouts.User-Home')
@section('title')
	CheckOut Voucher
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style10.css">
@endsection
@section('script')
@endsection
@section('container')
	<div class="col-md-8 m-auto">
		<div class="row">
			<div class="col-md-12">
				<form class="form" method="GET">
					<div class="card card1">
						<div class="card-header">Order Information</div>
							<div class="card-body">
								<div class="form-group row">
									<label class="col-md-6">Name:</label>
									<label class="col-md-6">Md. Amiruzzaman Bin Ali</label>
								</div>
								<div class="form-group row">
									<label class="col-md-6">Address:</label>
									<label class="col-md-6">140/12,Gazipur</label>
								</div>
								<div class="form-group row">
									<label class="col-md-6">E-Mail:</label>
									<label class="col-md-6">munan.ak17@gmail.com</label>
								</div>
								@forelse($users as $user)
								<div class="form-group row">
									<label class="col-md-6">Product Code</label>
									<label class="col-md-6">{{$user->code}}</label>
								</div>
								<div class="form-group row">
									<label class="col-md-6">Product Name</label>
									<label class="col-md-6">{{$user->product_name}}</label>
								</div>
								<div class="form-group row">
									<label class="col-md-6">Total Price</label>
									<label class="col-md-6">{{$user->totalprice}}</label>
								</div>
								@empty
								@endforelse
							</div>
						<div class="card-footer">Thank You for your Order</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 ml-auto">
									<button id="bt1" type="button" class="btn btn-danger col-md-12">Save</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
@endsection