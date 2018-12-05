@extends('layouts.User-Home')
@section('title')
	Category
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style3.css">
@endsection
@section('container')
	<div class="container c1">
		<div class="row">
			@forelse($products as $product)
			<div class="col-md-3 col-lg-2 col-sm-4 col-xl-2">
				<img src="{{asset('images')}}/{{$product->image1}}" class="rounded-circle rcc" alt="logo">
				<p>{{$product->discount}}</p>
				<button type="button" class="btn btn-danger"><a href="{{route('user.details', [$product->id])}}">Buy Now</a></button>
				<p><b id="b">{{$product->product_name}}</b></p>
				<p>Price:{{$product->product_price}}</p>
			</div>
			@empty
			@endforelse
		</div>
	</div>
	<div class="col-md-5 ml-auto">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="card cd col-md-3 ml-auto">
						<div class="card-header">
							<a href="{{route('user.cartshow')}}"><img id="cart" src="{{asset('images')}}/admin/order.png"></a>
							<p id="item">Items:{{$cartItem}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container c1">
		<div class="row">
			
		</div>
	</div>
	<div class="container c1">
		<div class="row">
			<p>Page:{{$products->links()}}</p>
		</div>
	</div>
@endsection