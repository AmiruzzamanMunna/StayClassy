@extends('layouts.User-Home')
@section('title')
	Details
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style9.css">
@endsection
@section('script')
	<script type="text/javascript">
		function change() {
			var img=document.getElementById('td1');
			img.src="images/bag-2.jpg";
		}
		function change1() {
			var img=document.getElementById('td1');
			img.src="images/bag-1.jpg";
		}
		function change2() {
			var img=document.getElementById('td1');
			img.src="images/bag-3.jpg";
		}

	</script>
@endsection
@section('container')
	<div class="container-fluid">
		<div class="row ml-auto">
			<div class="col-md-12">
				<div class="row ml-auto">
					<div class="table col-md-4 dvtb ml-auto">
						<table class="table-bordered">
							<tr>
								<th>Product</th>
							</tr>
							<tr>
								<td><img id="td1" class="tbimg" src="images/bag/bag-2.jpg" alt="td1"></td>
							</tr>
						</table>
					</div>
					<div class="col-md-5 m-auto cat">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="card crd">
												<h4 class="m-auto">Office Bag</h4>
											<div class="card-body">
												<div class="form-group row">
													<label class="col-md-6">Category:</label>
													<label class="col-md-6">Office</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Type:</label>
													<label class="col-md-6">Gents</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Available:</label>
													<label class="col-md-6">In Stock</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Discount:</label>
													<label class="col-md-6">7%</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Price:</label>
													<label class="col-md-6"><del>1100</del>1024</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Quantity:</label>
													<input type="number" name="quantity">
												</div>
												<div class=" form-group row">
													<div class="col-md-5 m-auto">
														<button type="button" class="btn btn-success col-md-8">Add To Cart</button>
													</div>
													<div class="col-md-5 ml-auto">
														<button type="button" class="btn btn-danger col-md-8"><a href="{{route('user.checkout')}}">CheckOut</a></button
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row m-auto">
					<div class="col-md-6 ml-auto">
						<div class="row m-auto">
							<div class="col-md-3 dvim">
								<img id="im1" class="simg" src="images/bag/bag-2.jpg" alt="im1" onclick="change();">
							</div>
							<div class="col-md-3 dvim">
								<img id="#" class="simg" src="images/bag/bag-1.jpg" onclick="change1();">
							</div>
							<div class="col-md-3 dvim">
								<img id="#" class="simg" src="images/bag/bag-3.jpg" onclick="change2();">
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="card cd col-md-3">
										<div class="card-header">
											<img id="cart" src="images/admin/order.png">
										</div>
										<div class="card-body">
											<label class="col-md-12">Item</label>
											<hr>
											<label class="col-md-12">Price</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-auto">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-10 dvpd m-auto">
						<a href="">Details</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10 m-auto">
								<div class="card col-md-6">
									<div class="card-body">
										<table class="table table-bordered table-md table-striped">
											<tr>
												<td>Nice Color</td>
											</tr>
											<tr>
												<td>Light Weight</td>
											</tr>
											<tr>
												<td>Great outlook</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection