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
	<div class="row m-auto">
		<div class="card">
			<div class="card-header"><h2>Latest Order</h2></div>
			<div class="card-body">
				<table class="table table-bordered table-md table-striped">
				<tr>
					<th>Image</th>
					<th>Product Name</th>
					<th>Product Code</th>
					<th>Customer Name</th>
					<th>Mobile 1</th>
					<th>Order Date</th>
					<th>Status</th>
					<th>Details</th>
				</tr>
				<tr>
					<td><img src="images/bag/bag-1.jpg" class="ig"></td>
					<td>BackPack Fasttrack</td>
					<td>Regular</td>
					<td>Munna</td>
					<td>090909090</td>
					<td>2018-8-8</td>
					<td>Pending</td>
					<td><a href="{{route('order.orderdetails')}}">Show</a></td>
				</tr>
				<tr>
					<td><img src="images/bag/bag-1.jpg" class="ig"></td>
					<td>BackPack Fasttrack</td>
					<td>Regular</td>
					<td>Munna</td>
					<td>090909090</td>
					<td>2018-8-8</td>
					<td>Pending</td>
					<td><a href="{{route('order.orderdetails')}}">Show</a></td>
				</tr>
				<tr>
					<td><img src="images/bag/bag-1.jpg" class="ig"></td>
					<td>BackPack Fasttrack</td>
					<td>Regular</td>
					<td>Munna</td>
					<td>090909090</td>
					<td>2018-8-8</td>
					<td>Active</td>
					<td><a href="{{route('order.orderdetails')}}">Show</a></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
@endsection