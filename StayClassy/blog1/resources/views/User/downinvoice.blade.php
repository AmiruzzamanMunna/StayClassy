<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="form-group row">
		<label class="col-md-6">Name:</label>
		<label class="col-md-6">Md. Amiruzzaman Bin Ali</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">Address:</label>
		<label class="col-md-6">140/12,Gazipur</label>
	</div>
	<div class="form-group row">
		<label class="col-md-6">E-Mail:</label>
		<label class="col-md-6">munan.ak17@gmail.com</label>
	</div>
	@forelse($users as $user)
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
	@empty
	@endforelse
	<div class="form-group row">
		<label class="col-md-6">Total Price</label>
		<label class="col-md-6">{{$total}}</label>
	</div>
</body>
</html>