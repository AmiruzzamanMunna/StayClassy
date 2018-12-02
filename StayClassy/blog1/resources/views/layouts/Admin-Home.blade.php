<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/dash.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">

	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/popper.min.js">
 	</script>
	<script src="{{asset('js')}}/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('css')
	@yield('script')
</head>
<body>
	<!-- <div class="container-fluid"> -->
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
					<button type="button" id="sidebarCollapse" class="btn btn-info">
   					<!-- <i class="fa fa-align-justify"></i> -->
   					<span class="navbar-toggler-icon"></span>
   					</button>
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsenav">
					<span class="navbar-toggler-icon"></span>
					</button>
					<h1 class="h m-auto">Admin Panel</h1>
					<div class="col-md-1">
						<ul class="navbar-nav">
							@if(Session::has('loggedAdmin'))
							<li class="nav-item">
								<a href="{{route('stuff.edit')}}" class="nav-link">Account</a>
							</li>
						</ul>
					</div>
					<div class="col-md-1">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="{{route('admin.adminlogout')}}" class="nav-link">Logout</a>
							</li>
						</ul>
						@endif
					</div>
				</nav>
			</div>
		</div>
	<!-- </div> -->
	<!-- <div class="container-fluid"> -->
		<div class="collapse show" id="collapsenav">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<ul class="flex-column" id="navclm">
								<h1>Stay Classy</h1><br>
								<li class="nav-item" id="navitem">
									<a class="nav-link" href="{{route('admin.index')}}">Dashbord</a>
								</li>
								<li class="nav-item" id="navitem">
									<a class="nav-link" href="{{route('admin.manageuser')}}">Manage User</a>
								</li>
								<li class="nav-item" id="navitem">
									<a class="nav-link collapse" data-toggle="collapse" data-target="#demo0" href="#">Order <i id="cc" class="fa fa-caret-down"></i></a>
									<div class="collapse" id="demo0">
										<a href="{{route('order.pending')}}" class="nav-link">Pending</a>
										<a href="{{route('order.delivered')}}" class="nav-link">Delivered</a>
										<a href="{{route('order.returned')}}" class="nav-link">Returned</a>
										<a href="{{route('order.canceled')}}" class="nav-link">Cancelled</a>
										<a href="{{route('order.index')}}" class="nav-link">All</a>
									</div>
								</li>
								<li class="nav-item" id="navitem">
									<a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#demo1">Product <i id="cc" class="fa fa-caret-down"></i></a>
									<div class="collapse" id="demo1">
										<a href="{{route('product.create')}}" class="nav-link">Add New</a>
										<a href="{{route('product.index')}}" class="nav-link">View All</a>
									</div>
								</li>
								
								<li class="nav-item" id="navitem">
									<a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#demo2">Stuff <i id="cc" class="fa fa-caret-down"></i></a>
									<div class="collapse" id="demo2">
										<a href="{{route('stuff.stufflist')}}" class="nav-link">Stuff List</a>
										<a href="{{route('stuff.create')}}" class="nav-link">Add Stuff</a>
									</div>
								</li>
								<li class="nav-item" id="navitem">
									<a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#demo3">Layout <i id="cc" class="fa fa-caret-down"></i></a>
									<div class="collapse" id="demo3">
										<a href="{{route('layout.slider')}}" class="nav-link">Slider</a>
										<a href="{{route('layout.left')}}" class="nav-link">Left Image</a>
										<a href="{{route('layout.right')}}" class="nav-link">Right Image</a>
									</div>
								</li>
								<li class="nav-item" id="navitem">
									<a class="nav-link collapse" href="#" data-toggle="collapse" data-target="#demo4">Footer <i id="cc" class="fa fa-caret-down"></i></a>
									<div class="collapse" id="demo4">
										<a href="{{route('footer.create')}}" class="nav-link">Social</a>
										<a href="{{route('footer.qualitycreate')}}" class="nav-link">Quality</a>
										<a href="{{route('footer.returnpolicycreate')}}" class="nav-link">Return policy</a>
										<a href="{{route('footer.shippingcreate')}}" class="nav-link">Shipping</a>
										<a href="{{route('footer.customercreate')}}" class="nav-link">Customer Service</a>
										<a href="{{route('footer.contactcreate')}}" class="nav-link">Contact</a>
										<a href="{{route('footer.policycreate')}}" class="nav-link">Policy</a>
										<a href="{{route('footer.aboutcreate')}}" class="nav-link">About</a>
									</div>
								</li>
							</ul>
						</div>
						@yield('container')
					</div>	
				</div>
			</div>
		</div>
	<!-- </div> -->
	
</body>
<script>
	$(document).ready(function() {
		$("#sidebarCollapse").click(function() {
			$("#navclm").toggle(1100);
		})
	})
	</script>
</html>
