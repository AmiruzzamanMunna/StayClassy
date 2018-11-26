@extends('layouts.User-Home')
@section('title')
	User
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/order.css">
@endsection
@section('script')
@endsection
@section('container')
	<div class="col-md-8 m-auto">
		<div class="card">
			<div class="card-header">
				<h2>Customer info</h2>
			</div>
			<div class="card-body">
				@forelse($orders as $order)
				<div class="form-group row">
					<label class="col-md-6">Customer name: </label>
					<label class="col-md-6">{{$order->name}}</label>
					<label class="col-md-6">Customer contact: </label>
					<label class="col-md-6">{{$order->mobile1}}</label>
					<label class="col-md-6">Address: </label>
					<label class="col-md-6">{{$order->address}}</label>
					<label class="col-md-6">Order date: </label>
					<label class="col-md-6">{{$order->date}}</label>
					<label class="col-md-6">Status: </label>
					<label class="col-md-6">{{$order->status_name}}</label>
				</div>
				@break
				@empty
				@endforelse
			</div>
		</div>
		<div class="card">
			<div class="card-header"><h2>All Order</h2></div>
			<div class="card-body">
				<table class="table table-bordered table-md table-striped">
					<tr>
						<th>Image</th>
						<th>Product Name</th>
						<th>Product Code</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Status</th>
					</tr>
					@forelse($orders as $order)
					<tr>
						<td><img src="{{asset('images')}}/{{$order->image1}}" id="img"></td>
						<td>{{$order->product_name}}</td>
						<td>{{$order->code}}</td>
						<td>{{$order->quantity}}</td>
						<td>{{$order->totalprice}}</td>
						<td>{{$order->status_name}}</td>
					</tr>
					@empty
					@endforelse
				</table>
			</div>
			<div class="card-footer">
				</div>
				<div class="row">
					<dir class="col-md-12">
						<div class="row">
							<div class="col-md-2 m-auto">
								{{$orders->links()}}
							</div>
						</div>
					</dir>
				</div>
			</div>
		</div>
	</div>
@endsection