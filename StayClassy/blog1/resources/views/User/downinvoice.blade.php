<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@forelse($users as $user)
	<div class="form-group row">
		<label class="col-md-6">Name:</label>
		<label class="col-md-6">{{$user->name}}</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">Address:</label>
		<label class="col-md-6">{{$user->address}}</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">E-Mail:</label>
		<label class="col-md-6">{{$user->email}}</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">Product Code</label>
		<label class="col-md-6">{{$user->code}}</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">Product Name</label>
		<label class="col-md-6">{{$user->product_name}}</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">Subtotal Price</label>
		<label class="col-md-6">{{$user->totalprice}}</label>
	</div>
	@break
	@empty
	@endforelse
	<div class="form-group row">
		<label class="col-md-6">Total Price</label>
		<label class="col-md-6">{{$total}}</label>
	</div>
</body>
</html>