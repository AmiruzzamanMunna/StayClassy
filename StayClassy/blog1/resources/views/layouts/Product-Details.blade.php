<!DOCTYPE html>
<html>
<head>
	<title>Product-Details</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style9.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">
	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/bootstrap.min.js"></script>
	<script src="{{asset('js')}}/script1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('css')
	@yield('script')
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myCollapse">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="myCollapse">
						<ul class="m-auto navbar-nav">
							<li class="nav-item"> 
								<a href="#" class="nav-link" id="nvlk">Traveling</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link" id="nvlk" >Duffel</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="nvlk">Office</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="nvlk">Regular</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link" id="nvlk">Other Bags</a>
							</li>
					 	</ul>
						<a href="" class="navbar-brand">Stay Classy</a>
						<ul class="m-auto navbar-nav">
							<li class="nav-item">
								<a href="" class="nav-link" id="nvlk">New Arrivals</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link" id="nvlk">Gents</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link" id="nvlk">Ladis</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link" id="nvlk">Offers</a>
							</li>
							<li class="nav-item ">
								<a href="" class="nav-link" id="nvlk">Sign-Up</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link" id="nvlk">Log-in</a>
							</li>
							<li class="nav-item m-auto">
								<i id="icon" class="fa fa-search collapse" data-toggle="collapse" data-target="#srch">
									<div class="collapse" id="srch">
										<input type="text" name="">
									</div>
								</i>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row ml-auto">
					<div class="table col-md-6 dvtb">
						<table class="table-bordered">
							<tr>
								<th>Product</th>
							</tr>
							<tr>
								<td>@yield('td1')</td>
							</tr>
						</table>
					</div>
					<div class="col-md-5 m-auto cat">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="card crd">
												<h4 class="m-auto">@yield('h')</h4>
											<div class="card-body">
												<div class="form-group row">
													<label class="col-md-6">Category:</label>
													<label class="col-md-6">@yield('category')</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Type:</label>
													<label class="col-md-6">@yield('type')</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Available:</label>
													<label class="col-md-6">@yield('available')</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Discount:</label>
													<label class="col-md-6">@yield('discount')</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Price:</label>
													<label class="col-md-6">@yield('price')</label>
												</div>
												<div class="form-group row">
													<label class="col-md-6">Quantity:</label>
													<input type="number" name="quantity">
												</div>
												<div class="row">
													<button type="button" class="btn btn-success col-md-12">Add To Cart</button>
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
			<div class="col-md-7">
				<div class="row m-auto">
					<div class="col-md-3 dvim">
						@yield('img1')
					</div>
					<div class="col-md-3 dvim">
						@yield('img2')
					</div>
					<div class="col-md-3 dvim">
						@yield('img3')
					</div>
				</div>
			</div>
			<div class="col-md-5 m-auto">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="card cd col-md-8 m-auto">
								<div class="card-header">
									<img id="cart" src="images/order.png">
								</div>
								<div class="card-body">
									<label class="col-md-4">Item</label>
									<hr>
									<label class="col-md-4">Price</label>
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
					<div class="col-md-3 dvpd">
						<a href="">Details</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-auto">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-5">
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered table-md table-striped">
									<tr>
										<td>@yield('sp1')</td>
									</tr>
									<tr>
										<td>@yield('sp2')</td>
									</tr>
									<tr>
										<td>@yield('sp3')</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="footer">
		<footer>
			<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
					<p id="p">100% Orginal Product</p>
					<p id="p">All Product go through</p>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
					<p id="p">Easy Returning Policy</p>
					<p id="p">Use our hassle free methods for returning</p>
				</div>
				<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
					<p id="p">Shipping</p>
					<p id="p">Comfortable Home Delivery in Dhaka.Advance paying for shipping Charges is applicable for other locations</p>
				</div>
			</div>
			<br>
			<hr>
			<div class="row">
				<div class="col-md-2 col-lg-2 col-sm-4 col-xl-2">
					<p id="p">Customer Services</p>
					<p id="p">Payment Option</p>
					<p id="p">Track Order</p>
					<p id="p">Find a Store</p>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-4 col-xl-2">
					<p id="p">Contact us</p>
					<p id="p">+8801641064685</p>
					<p id="p">support@stayclassy.com.bd</p>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-3 col-xl-2">
					<p id="p">Policies</p>
					<p id="p">Return & Exchanges</p>
					<p id="p">Cancellation</p>
					<p id="p">Shipping</p>
					<p id="p">Delivery Information</p>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-4 col-xl-2">
					<p id="p">About Stay Classy</p>
					<p id="p">About us</p>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-4 col-xl-2">
					<p id="p">Follow Us On</p>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-4 col-xl-2">
					<a href="#"><img src="images/fb.png" class="rounded-circle rc1" alt="logo"></a>
					<a href="#"><img src="images/youtube.png" class="rounded-circle rc1" alt="logo1"></a>
					<a href="#"><img src="images/insta.png" class="rounded-circle rc1" alt="logo2" ></a>
					<a href="#"><img src="images/twitter.png" class="rounded-circle rc1" alt="logo3"></a>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>