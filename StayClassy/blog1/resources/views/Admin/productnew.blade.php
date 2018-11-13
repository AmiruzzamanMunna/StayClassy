@extends('layouts.Admin-Home')
@section('title')
	Add New Product
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/addnew.css">
@endsection
@section('script')
<script src="{{asset('js')}}/jquery.validate.min.js"></script>
	<script src="{{asset('js')}}/validation/script2.js"></script>
@endsection
@section('container')
	<div class="col-md-6 m-auto"><br><br><br>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-10">
					<div class="card">
					<div class="card-header"><h2>Add New Product</h2></div>
					<div class="card-body">
					<form action="" method="post" id="addproduct-form" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="form-group row">
							<label class="col-md-3">Name:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="pname">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Code:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="code">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Sold Item:</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="sold_item">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Buying Price:</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="buyprice">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Price:</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="price">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Discount:</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="discount">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Quantity:</label>
							<div class="col-md-8">
								<input type="number" class="form-control" name="quantity">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">New Arrival:</label>
							<div class="col-md-8">
								<label class="radio-inline">
									<input type="radio" name="new" value="1" checked>Yes
									<input type="radio" name="new" value="0">No
								</label>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Category:</label>
							<div class="col-md-8">
								<select class="form-control" name="category">
									@forelse($categories as $category)
										<option value="{{$category->id}}">				{{$category->name}}
										</option>
									@empty
									@endforelse
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Type:</label>
							<div class="col-md-8">
								<select class="form-control" name="type">
									@forelse($types as $type)
										<option value="{{$type->id}}">
											{{$type->name}}
										</option>
										@empty
									@endforelse
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Image1:</label>
							<div class="col-md-8">
								<input type="file" class="form-control" name="img1" id="img1">
								<img id="src1">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Image2:</label>
							<div class="col-md-8">
								<input type="file" class="form-control" name="img2" id="img2">
								<img id="src2">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Image3:</label>
							<div class="col-md-8">
								<input type="file" class="form-control" name="img3" id="img3">
								<img id="src3">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3">Status:</label>
							<div class="col-md-8">
								<label class="radio-inline">
									<input type="radio" name="status" value="5" checked>Active
									<input type="radio" name="status" value="6">Deactive
								</label>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-5">Specification1:</label>
							<input type="text" name="specification[]">
							<input type="button" class="btn btn-success" name="" id="bt1" value="Add New Field">
						</div>
						<div class="form-group row">
							<label class="col-md-5" id="th1">Specification2:</label>
							<input type="text" id="tx1" name="specification[]">
							<div class="col-md-1">
								<input type="button" class="btn btn-danger" name="" id="bt2" value="Remove">
							</div>
							<input type="button" class="btn btn-success" name="" id="bt3" value="Add New Field">
						</div>
						<div class="form-group row">
							<label class="col-md-5" id="th2">Specification3:</label>
							<input type="text" id="tx2" name="specification[]">
							<div class="col-md-1">
								<input type="button" class="btn btn-danger" name="" id="bt4" value="Remove">
							</div>
							<input type="button" class="btn btn-success" name="" id="bt5" value="Add New Field">
						</div>
						@if($errors->any())
							<ul>
								@foreach($errors-> all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</ul>
						@endif
						<div class="row">
							<div class="col-md-8">
								<input type="reset" class="btn btn-danger" name="" value="Reset">
							</div>
							<div class="col-md-3">
								<input type="submit" class="btn btn-success" name="" value="Save">
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
@endsection