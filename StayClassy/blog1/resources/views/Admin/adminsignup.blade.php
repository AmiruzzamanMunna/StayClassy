<!DOCTYPE html>
<html>
<head>
	<title>Admin Signup</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/signup.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">

	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/popper.min.js"></script>
	<script src="{{asset('js')}}/jquery.validate.min.js"></script>
	<script src="{{asset('js')}}/validation/script6.js"></script>
</head>
<body>
	<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsenav">
			<span class="navbar-toggler-icon"></span>
			</button>
			<h1 class="h m-auto">Admin Signup</h1>
			<div class="col-md-1">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="{{route('admin.login')}}" class="nav-link dropdown" data-toggle="dropdown">Login</a>
					</li>
				</ul>
			</div>
			<div class="col-md-1">
				<!-- <ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">Logout</a>
					</li>
				</ul> -->
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
							<div class="card-header">Admin Registration</div>
							<div class="card-body">
								<form id="adminregistration" method="post">
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
										<label class="col-md-4">Phone:</label>
										<div class="col-md-8">
											<input type="text" name="phone" class="form-control">
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
