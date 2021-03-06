@extends('layouts.Admin-Home')
@section('title')
	Product
@endsection
@section('script')
	<script src="{{asset('js')}}/filter.js"></script>
@endsection
@section('container')
	<div class="col-md-7"><br>
		<div class="row">
			<div class="card">
				<div class="card-header">
					<h2>All Products</h2>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped" id="product-list">
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Code</th>
							<th>Category</th>
							<th>Type</th>
							<th>Buy Price</th>
							<th>Price</th>
							<th>Discount %</th>
							<th>Quantity</th>
						</tr>
						@forelse($products as $product)
						<tr>
							<td><img src="{{asset('images')}}/{{$product->image1}}" class="ig"></td>
							<td><a href="{{route('product.productedit',[$product->id])}}">{{$product->product_name}}</a></td>
							<td>{{$product->code}}</td>
							<td>{{$product->category_name}}</td>
							<td>{{$product->type_name}}</td>
							<td>{{$product->buy_price}}</td>
							<td>{{$product->product_price}}</td>
							<td>{{$product->discount}}</td>
							<td>{{$product->product_quantity}}<br>
								<a href="{{route('Product.quantity',[$product->id])}}">Add</a>
							</td>
						</tr>
						@empty
						@endforelse
					</table>
				</div>
				<div class="card-footer">
					<div class="row">
						<dir class="col-md-12">
							<div class="row">
								<div class="col-md-2 m-auto">
									{{$products->links()}}
								</div>
							</div>
						</dir>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"><br>
		<div class="row m-auto">
			<div class="card">
				<div class="card-header">
					<h3>Categories</h3>
				</div>
				<div class="card-body">
					<form action="" method="get">
						@foreach($categories as $category)
						<div class="form-group row">
							<label class="cat">
								<input type="checkbox" class="categories" value="{{$category->id}}" name="categories[]" >{{$category->name}}
							</label>
						</div>
						@endforeach
					</form>
				</div>
			</div>
		</div><br>
		<div class="row m-auto">
			<div class="card">
				<div class="card-header">
					<h4> Category Types</h4>
				</div>
				<div class="card-body">
					@foreach($types as $type)
						<div class="form-group type row">
							<label class="">
								<input type="checkbox" class="type" name="categories_types" value="{{$type->id}}">{{$type->name}}
							</label>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection