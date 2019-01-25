<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="card">
		<div class="card-header">Order Information</div>
		<div class="card-body">
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
				@break
				@empty
				@endforelse
			</div>
			@forelse($users as $user)
			<div class="form-group row">
				<label class="col-md-6">Order No:</label>
				<label class="col-md-6">{{$user->id}}</label>
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
			@empty
			@endforelse
			<div class="form-group row">
				<label class="col-md-6">Total Price</label>
				<label class="col-md-6">{{$total}}</label>
			</div>
			<div class="form-group row">
				<label class="col-md-6">Order Date</label>
				@forelse($users as $user)
				<label class="col-md-6">{{$user->date}}</label>
				@break
				@empty
				@endforelse
			</div>
		</div>
		<div class="card-footer">Thank You for Ordering</div>
	</div>
</body>
</html>