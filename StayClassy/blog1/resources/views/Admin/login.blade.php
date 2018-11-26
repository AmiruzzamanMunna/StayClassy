<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/login.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">

	<script src="{{asset('js')}}/jquery.min.js"></script>
	<script src="{{asset('js')}}/popper.min.js">
 	</script>
	<script src="{{asset('js')}}/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="{{asset('js')}}/jquery.validate.min.js"></script>
	<script src="{{asset('js')}}/script1.js"></script>

</head>
<body>
<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsenav">
			<span class="navbar-toggler-icon"></span>
			</button>
			<h1 class="h m-auto">Admin Panel</h1>
			<div class="col-md-1">
				<ul class="navbar-nav">
					
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
<div class="col-md-6 m-auto">
		<div class="row"></div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-10">
						<div class="card">
							@if(session('message'))
								<div class="alert alert-success m-auto">
									{{session('message')}}
								</div>
							@endif
						<div class="card-header"><h2>Admin Login</h2></div>
						<div class="card-body">
							<form action="" method="POST" id="Admin">
								{{csrf_field()}}
								<div class="form-group row">
									<label class="col-md-3">User Name:</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="Username">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Password:</label>
									<div class="col-md-6">
										<input type="Password" class="form-control" name="Password">
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
									<div class="col-md-8">
										<input type="reset" class="btn btn-danger" name="" value="Reset">
									</div>
									<div class="col-md-3">
										<input type="submit" class="btn btn-success" name="" value="Login">
									</div>
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
