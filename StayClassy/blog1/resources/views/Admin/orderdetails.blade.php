@extends('layouts.Admin-Home')
@section('title')
	Order Details
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/order.css">
@endsection
@section('container')
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-12">
			<form>
				<div class="card">
					<div class="card-header">
						<h3>Order Details</h3>
					</div>
					<div class="row">
						<div class="col-md-7">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-6">Product code</label>
								<label class="col-sm-6">Back 1</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Product name</label>
								<label class="col-sm-6">Back pack First Track</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Price</label>
								<label class="col-sm-6">2500tk</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Customer Name</label>
								<label class="col-sm-6">Munna</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Mobile No1:</label>
								<label class="col-sm-6">01787284068</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Mobile No2:</label>
								<label class="col-sm-6">01787284068</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Address:</label>
								<label class="col-sm-6">Bhura</label>
							</div>
							<div class="form-group row">
								<label class="col-sm-6">Order Date:</label>
								<label class="col-sm-6">2018-10-7</label>
							</div>
						</div>
					</div>
					<div class="col-md-5"><br>
						<img id="img" src="{{asset('images')}}/product/Gents-1-1.jpg"></div>
					</div>
					<div class="card-footer">
						<div class="row">
						<div class="col-sm-3">
							<input type="button" class="btn btn-danger" name="" value="Cancel">
						</div>
						<div class="col-sm-3">
							<input type="button" class="btn btn-warning" name="" value="Returned">
						</div>
						<div class="col-sm-3">
							<input type="button" class="btn btn-success" name="" value="Delivered">
						</div>
					</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
@endsection