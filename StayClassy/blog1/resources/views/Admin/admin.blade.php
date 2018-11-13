@extends('layouts.Admin-Home')
@section('title')
	Admin DashBoard
@endsection

@section('container')
	<div class="col-md-7 m-auto"><br><br>
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
										</div>
										<div class="card-footer">
											<a href="{{route('order.order')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Order</div>
										<div class="card-body">
											<img id="cart1" src="images/admin/cart4.png">
										</div>
										<div class="card-footer">
											<a href="{{route('order.order')}}">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Delivered</div>
										<div class="card-body">
											<img src="images/admin/cart6.png">
										</div>
										<div class="card-footer">
											<a href="">Details....</a>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="card">
										<div class="card-header">Total Returnded</div>
										<div class="card-body">
											<img src="images/admin/cart1.png">
										</div>
										<div class="card-footer">
											<a href="">Details....</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div><br><br>
		<div class="row">
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
	</div>
@endsection