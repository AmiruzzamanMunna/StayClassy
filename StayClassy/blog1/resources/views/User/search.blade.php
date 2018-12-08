@extends('layouts.User-Home')
@section('title')
	Search Product
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style11.css">
@endsection
<div class="container">
	<div class="row">
		@forelse($products as $product)
		<div class="col-md-3 col-lg-2 col-sm-4 col-xl-2"><br><br><br><br>
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