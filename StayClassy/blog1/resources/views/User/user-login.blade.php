@extends('layouts.User-Home')

@section('title')
	Login
@endsection

@section('container')
	<div class="col-md-6 m-auto"><br><br><br><br><br>
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
						<div class="card-header"><h2>User Login</h2></div>
						<div class="card-body">
							<form method="post" id="User">
								{{csrf_field()}}
								<div class="form-group row">
									<label class="col-md-3">User Name:</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="username">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3">Password:</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-8"><a href="">Forgot Password?</a></label>
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
@endsection