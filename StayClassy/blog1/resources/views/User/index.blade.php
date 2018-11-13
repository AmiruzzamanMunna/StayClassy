@extends('layouts.User-Home')
@section('title')
	Stay Classy
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style11.css">
@endsection
@section('container')
	<div class="container-fluid">
		<div class="row">
			<div id="demo" class="carousel slide carudemo" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="caruimg" src="images/banner-1.jpg" alt="mm">
					</div>
					<div class="carousel-item">
						<img class="caruimg" src="images/banner-1.jpg" alt="mm1">
					</div>
					<div class="carousel-item">
						<img class="caruimg" src="images/banner-1.jpg" alt="mm2">
					</div>
				</div>
				<a href="#demo" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#demo" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				<a href="#demo" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<h1>Stay Classy Essential</h1><br>
		<div class="row">
			@forelse($products as $product)
			<div class="col-md-3 col-lg-2 col-sm-4 col-xl-2">
				<img src="{{asset('images')}}/{{$product->image1}}" class="rounded-circle rcc" alt="logo">
				<p>{{$product->discount}}%</p>
				<button type="button" class="btn btn-danger"><a href="{{route('user.details', [$product->id])}}">Buy Now</a></button>
				<p><b id="b">{{$product->product_name}}</b></p>
				<p>Price:{{$product->product_price}}</p>
			</div>
			@empty
			@endforelse
		</div>
		<div class="col-md-5 ml-auto">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="card cd col-md-3 ml-auto">
							<div class="card-header">
								<a href="{{route('user.cartshow')}}"><img id="cart" src="{{asset('images')}}/admin/order.png"></a>
								<p>Items:{{Cart::count()}}</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
			<div class="row">
				<div class="col-md-2">
					<p id="pp">StayClassy is a Online Shop</p>
					<div class="row">
						<div class="col-md-4">
							<img class="rcc2" src="images/banner-2.jpg">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img class="rcc2" src="images/speech-2.jpg">
				</div>
			</div>
		</div>
		<br>
		
	<div class="container">
		<h2>Popular Items</h2><br>
		<div class="row">
			@forelse($productspopular  as $product)
			<div class="col-md-3 col-lg-2 col-sm-4 col-xl-2">
				<img src="{{asset('images')}}/{{$product->image1}}" class="rounded-circle rcc" alt="logo">
				<p>{{$product->discount}}%</p>
				<button type="button" class="btn btn-danger"><a href="{{route('user.details', [$product->id])}}">Buy Now</a></button>
				<p><b id="b">{{$product->product_name}}</b></p>
				<p>Price:{{$product->product_price}}</p>
			</div>
			@empty
			@endforelse
		</div>
		</div>
	</div>
	<br>
	<div class="container">
			<h3>New Arrivals</h3><br>
				<div class="row">
					@forelse($productsnew as $product)
					<div class="col-md-3 col-lg-2 col-sm-4 col-xl-2">
						<img src="{{asset('images')}}/{{$product->image1}}" class="rounded-circle rcc" alt="logo">
						<p>{{$product->discount}}%</p>
						<button type="button" class="btn btn-danger"><a href="{{route('user.details', [$product->id])}}">Buy Now</a></button>
						<p><b id="b">{{$product->product_name}}</b></p>
						<p>Price:{{$product->product_price}}</p>
					</div>
					@empty
					@endforelse
				</div>
	</div><br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			@forelse($socials as $social)
			<div class="col-md-12">
				<h3>Follow Us</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 m-auto">
				<div class="row">
					<div class="col-md-3">
						<a href="{{$social->facebook}}">
						<img src="images/fb.png" class="rounded-circle rc1" alt="logo">
						</a>
					</div>
					<div class="col-md-3">
						<a href="{{$social->youtube}}">
							<img src="images/youtube.png" class="rounded-circle rc1" alt="logo1">
						</a>
					</div>
					<div class="col-md-3">
						<a href="{{$social->instagram}}">
							<img src="images/insta.png" class="rounded-circle rc1" alt="logo2" >
						</a>
					</div>
					<div class="col-md-3">
						<a href="{{$social->twitter}}">
							<img src="images/twitter.png" class="rounded-circle rc1" alt="logo3">
						</a>
					</div>
				</div>
			</div>
		</div>
		@empty
		@endforelse
	</div>
@endsection