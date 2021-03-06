@extends('layouts.Admin-Home')
@section('title')
	Order
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/order.css">
@endsection
@section('script')
@endsection
@section('container')
	<div class="col-md-8">
		<div class="card">
			<div class="card-header"><h2>All Order</h2></div>
			<div class="card-body">
				<table class="table table-bordered table-md table-striped">
					<tr>
						<th>Customer Name</th>
						<th>Mobile 1</th>
						<th>Address</th>
						<th>Order Date</th>
						<th>Status</th>
						<th>Price</th>
						<th>Details</th>
					</tr>
					@foreach($orders as $order)
					<tr>
						<td>{{$order->name}}</td>
						<td>{{$order->mobile1}}</td>
						<td>{{$order->address}}</td>
						<td>{{$order->order_date}}</td>
						<td>{{$order->status_name}}</td>
						<td>{{$order->totalprice}}</td>
						<td><a href="{{route('order.orderdetails',[$order->invoice_id])}}">Show</a></td>
					</tr>
					@endforeach
				</table>
			</div>
			<div class="card-footer">
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