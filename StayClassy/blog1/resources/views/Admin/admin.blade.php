@extends('layouts.Admin-Home')
@section('title')
	Admin DashBoard
@endsection

@section('container')
	<div class="col-md-8 m-auto"><br><br>
		<div class="row">
			<div class="col-md-12">
					<div class="card">
						<div class="card-header">Dash Board</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Current Order</div>
										<div class="card-body">
											<img src="images/admin/order1.png">
											<div><h1>{{$current_order}}</h1></div>
										</div>
										<div class="card-footer">
											<a href="{{route('order.index')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Order</div>
										<div class="card-body">
											<img id="cart1" src="images/admin/cart4.png">
											<div><h1>{{$current_order}}</h1></div>
										</div>
										<div class="card-footer">
											<a href="{{route('order.index')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Delivered</div>
										<div class="card-body">
											<img src="images/admin/cart6.png">
											<div><h1>{{$current_deliver}}</h1></div>
										</div>
										<div class="card-footer">
											<a href="{{route('order.delivered')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Returnded</div>
										<div class="card-body">
											<img src="images/admin/cart1.png">
											<div><h1>{{$current_return}}</h1></div>
										</div>
										<div class="card-footer">
											<a href="{{route('order.returned')}}">Details....</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div><br><br>
		<div class="row">
			<dir class="col-md-12">
				<div class="card">
					<div class="card-header"><h2>Latest Order</h2></div>
					<div class="card-body">
						<table class="table table-bordered table-md table-striped">
							<tr>
								<th>SL No</th>
								<th>Customer Name</th>
								<th>Mobile 1</th>
								<th>Address</th>
								<th>Order Date</th>
								<th>Status</th>
								<th>Price</th>
								<th>Details</th>
							</tr>
							@php
								$i=0
							@endphp
							@foreach($orders as $order)
							<tr>
								<td>{{(($orders->currentpage()-1)*$orders->perpage())+$loop->iteration}}</td>
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
										<p>Page {{$orders->currentpage()}} of {{$orders->lastpage()}} (Totals:{{$orders->total()}}) </p>
										{{$orders->links()}}
									</div>
								</div>
							</dir>
						</div>
					</div>
				</div>
			</dir>
		</div>
	</div>
@endsection