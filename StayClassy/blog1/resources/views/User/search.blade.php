@extends('layouts.User-Home')
@section('title')
	Search Product
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style11.css">
@endsection
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="row">
			<div class="col-md-10">
				<div class="row">
					@forelse($products as $product)
					@if($product)
						<div class="col-md-3 col-lg-2 col-sm-4 col-xl-2"><br><br><br><br>
						<img src="{{asset('images')}}/{{$product->image1}}" class="rounded-circle rcc" alt="logo">
						<p>{{$product->discount}}</p>
						<button type="button" class="btn btn-danger"><a href="{{route('user.details', [$product->id])}}">Buy Now</a></button>
						<p><b id="b">{{$product->product_name}}</b></p>
						<p>Price:{{$product->product_price}}</p>
						</div>
					@endif
					@empty
						<div class="row m-auto">
							<div class="col-md-12 m-auto">
								<div class="row m-auto">
									<div class="col-md-12"><br><br><br><br><br><br><br><br>
										<h1 style="color: red">Sorry Product is not Available</h1>
									</div>
								</div>
							</div>
						</div>
					@endforelse
				</div>
			</div>
		</div>
	</div>
	</div>
</div>