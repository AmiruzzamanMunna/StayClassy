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
	<div class="col-md-9 m-auto"><br><br><br>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
					<div class="card-header"><h2>Update Product</h2></div>
					<div class="card-body">
						<div class="row">
							<form action="" method="post" id="update-product-form" enctype="multipart/form-data">
								{{csrf_field()}}
								@forelse($products as $product)
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Name:</label>
									<div class="col-md-8">
										<input type="text" class="form-control col-md-8" name="pname"
										value="{{$product->product_name}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Code:</label>
									<div class="col-md-8">
										{{$product->code}}
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Sold Item:</label>
								<div class="col-md-8">
										<input type="number" class="form-control col-md-8" name="sold_item" value="{{$product->sold_item}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Buying Price:</label>
									<div class="col-md-8">
										<input type="number" class="form-control col-md-8" name="buyprice" value="{{$product->buy_price}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Price:</label>
									<div class="col-md-8">
										<input type="number" class="form-control col-md-8" name="price" value="{{$product->product_price}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Discount:</label>
									<div class="col-md-8">
										<input type="text" class="form-control col-md-8" name="discount" value="{{$product->discount}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Quantity:</label>
									<div class="col-md-8">
										<input type="number" class="form-control col-md-8" name="quantity" value="{{$product->product_quantity}}">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">New Arrival:</label>
									<div class="col-md-8">
										<label class="radio-inline">
											<input type="radio" name="new" value="1" checked>Yes
											<input type="radio" name="new" value="0">No
										</label>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Category:</label>
									<div class="col-md-8">
										<select class="form-control col-md-8" name="category">
											@forelse($categories as $category)
												<option value="{{$category->id}}">				{{$category->name}}
												</option>
											@empty
											@endforelse
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Type:</label>
									<div class="col-md-8">
										<select class="form-control col-md-8" name="type">
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
									<label class="col-md-3 ml-auto">Image1:</label>
									<div class="col-md-8">
										<input type="file" class="form-control col-md-8" name="img1" id="img1">
										<img id="src1">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Image2:</label>
									<div class="col-md-8">
										<input type="file" class="form-control col-md-8" name="img2" id="img2">
										<img id="src2">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Image3:</label>
									<div class="col-md-8">
										<input type="file" class="form-control col-md-8" name="img3" id="img3">
										<img id="src3">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 ml-auto">Status:</label>
									<div class="col-md-8">
										<label class="radio-inline">
											<input type="radio" name="status" value="5" checked>Active
											<input type="radio" name="status" value="6">Deactive
										</label>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 ml-auto">Specification1:</label>
									<input type="text" name="specification[]" class="form-control col-md-7">
									<div class="col-md-8 ml-auto">
										<input type="button" class="btn btn-success" name="" id="bt1" value="Add New Field">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 ml-auto" id="th1">Specification2:</label>
									<input type="text" id="tx1" name="specification[]" class="form-control col-md-6">
									<div class="col-md-1">
										<input type="button" class="btn btn-danger" name="" id="bt2" value="Remove">
									</div>
									<div class="col-md-6">
										<input type="button" class="btn btn-success" name="" id="bt3" value="Add New Field">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 ml-auto" id="th2">Specification3:</label>
									<input type="text" id="tx2" name="specification[]" class="form-control col-md-6">
									<div class="col-md-1">
										<input type="button" class="btn btn-danger" name="" id="bt4" value="Remove">
									</div>
									<div class="col-md-6">
										<input type="button" class="btn btn-success" name="" id="bt5" value="Add New Field">
									</div>
									@empty
									@endforelse
								</div>
								@if($errors->any())
									<ul>
										@foreach($errors-> all() as $error)
											<li>{{$error}}</li>
										@endforeach
									</ul>
								@endif
								<div class="row">
									<div class="col-md-5">
										<input type="reset" class="btn btn-danger" name="" value="Reset">
									</div>
									<div class="col-md-3">
										<input type="submit" class="btn btn-success" name="" value="Save">
									</div>
									<div class="col-md-3">
										<button type="button" class="btn btn-warning"><a href="{{route('product.delete',[$id])}}">Delete</a></button>
									</div>
									@if(session('message'))
										<div class="alert alert-success m-auto">
											{{session('message')}}
										</div>
									@endif
								</div>
							</form>
							<div class="col-md-3">
								<img class="image" src="{{asset('images')}}/{{$product->image1}}">
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection