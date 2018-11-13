<!DOCTYPE html>
<html>
<head>
	<title>User Signup</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/signup.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">

	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/popper.min.js"></script>
	<script src="{{asset('js')}}/jquery.validate.min.js"></script>
	<script src="{{asset('js')}}/validation/script4.js"></script>
</head>
<body>
	<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myCollapse">
				<ul class="m-auto navbar-nav">
					<li class="nav-item"> 
						<a href="{{route('user.category','Travelling')}}" class="nav-link" id="nvlk">Travelling</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link" id="nvlk" >Duffel</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.category','Office')}}" class="nav-link" id="nvlk">Office</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.category','Regular')}}" class="nav-link" id="nvlk">Regular</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.category','Other')}}" class="nav-link" id="nvlk">Other Bags</a>
					</li>
			 	</ul>
				<a href="{{route('user.index')}}" class="navbar-brand">Stay Classy</a>
				<ul class="ml-auto navbar-nav">
					<li class="nav-item">
						<a href="{{route('user.newarrival')}}" class="nav-link" id="nvlk">New Arrivals</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.type','Gents')}}" class="nav-link" id="nvlk">Gents</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.type','Ladies')}}" class="nav-link" id="nvlk">Ladies</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.offers')}}" class="nav-link" id="nvlk">Offers</a>
					</li>
					<li class="nav-item ">
						<a href="{{route('user.sign')}}" class="nav-link" id="nvlk">Sign-Up</a>
					</li>
					<li class="nav-item">
						<a href="{{route('user.userlogin')}}" class="nav-link" id="nvlk">Log-in</a>
					</li>
					<!-- <i class="fa fa-search m-auto" id="icon"> -->
						<li class="nav-item col-md-4 m-auto" id="list">
							<input type="search" placeholder="search" name="searchbox">
						<!-- <input type="submit" class="btn btn-primary" name="" value="Search"> -->
						</li>
					<!-- </i> -->
					
				</ul>
			</div>
		</nav>
	</div>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8 m-auto">
						<div class="card">
							<div class="card-header">User Registration</div>
							<div class="card-body">
								<form id="userregistration" method="post">
									{{csrf_field()}}
									<div class="form-group row">
										<label class="col-md-4">Name:</label>
										<div class="col-md-8">
											<input type="text" name="name" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">User Name:</label>
										<div class="col-md-8">
											<input type="text" name="username" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">E-mail:</label>
										<div class="col-md-8">
											<input type="email" name="email" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Mobile1:</label>
										<div class="col-md-8">
											<input type="text" name="mobile1" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Mobile2:</label>
										<div class="col-md-8">
											<input type="text" name="mobile2" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Address:</label>
										<div class="col-md-8">
											<input type="text" name="address" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Password:</label>
										<div class="col-md-8">
											<input type="password" name="password" class="form-control">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-4">Confirm Password:</label>
										<div class="col-md-8">
											<input type="password" name="confirm_password" class="form-control">
										</div>
									</div>
									@if($errors->any())
										<ul>
											@foreach($errors->all() as $error)
												<li>{{$error}}</li>
											@endforeach
										</ul>
									@endif
									<div class="row">
										<div class="col-md-9">
											<input type="reset" class="btn btn-primary" name="reset" value="Reset">
										</div>
										<div class="col-md-3 ml-auto">
											<input type="submit" class="btn btn-success" name="submit" value="Register">
										</div>
										@if(session('message'))
											<div class="alert alert-success m-auto">
												{{session('message')}}
											</div>
										@endif
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
