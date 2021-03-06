@extends('layouts.User-Home')
@section('title')
	Details
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style9.css">
	<script src="{{asset('js')}}/script2.js"></script>
@endsection
@section('script')
	<script type="text/javascript">
		function change() {
			var img=document.getElementById('td1');
			img.src="{{asset('images')}}/{{$product->image1}}";
		}
		function change1() {
			var img=document.getElementById('td1');
			img.src="{{asset('images')}}/{{$product->image2}}";
		}
		function change2() {
			var img=document.getElementById('td1');
			img.src="{{asset('images')}}/{{$product->image3}}";
		}

	</script>
@endsection
@section('container')
	<div class="container-fluid">
		<div class="row ml-auto">
			<div class="col-md-12">
				<div class="row ml-auto">
					<div class="table col-md-4 dvtb ml-auto">
						<table class="table-bordered">
							<tr>
								<th>Product</th>
							</tr>
							<tr>
								<td><img id="td1" class="tbimg" src="{{asset('images')}}/{{$product->image1}}" alt="td1"></td>
							</tr>
						</table>
					</div>
					<div class="col-md-5 m-auto cat">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<form>
											{{csrf_field()}}
											<?php
												$result=0;
											?>
											<div class="card crd">
													<h4 class="m-auto">{{$product->product_name}}</h4>
												<div class="card-body">
													<input type="hidden" name="" id="add-cart-id" value="{{$product->id}}">
													<div class="form-group row">
														<label class="col-md-6">Category:</label>
														<label class="col-md-6">{{$product->category_name}}</label>
													</div>
													<div class="form-group row">
														<label class="col-md-6">Type:</label>
														<label class="col-md-6">{{$product->type_name}}</label>
													</div>
													<div class="form-group row">
														<label class="col-md-6">Available:
														</label>
														<label class="col-md-6">
															@if($product->product_quantity > 0)
																In stock
															@else
																Out of stock
															@endif
														</label>
													</div>
													@if($product->size)
													<div class="form-group row">
														<label class="col-md-6 lbl">Size:</label>
														<div class="col-md-6">
															<select class="form-control">
																@foreach($sizes as $test)
																<option>{{$test}}</option>
																@endforeach
															</select>
														</div>
													</div>
													@endif
													<div class="form-group row">
														<label class="col-md-6">Discount:</label>
														<label class="col-md-6">{{$product->discount}}</label>
													</div>
													<div class="form-group row">
														<label class="col-md-6">Price:</label>
														<?php
														
															$result=$product->product_price-($product->discount*$product->product_price/100);
														?>
														<label class="col-md-6"><del>{{$product->product_price}}</del>{{$result}}tk</label>
													</div>
													<div class="form-group row">
														<label class="col-md-6">Quantity:</label>
														<input type="text" id="add-cart-quantity" name="Quantity" value="1">
														@foreach($errors->all() as $error)
															{{$error}}
														@endforeach
													</div>
													<div class=" form-group row">
														<div class="col-md-12">
															<button type="button" id="add-cart-button" class="btn btn-success col-md-12">Add To Cart</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row m-auto">
					<div class="col-md-6 ml-auto">
						<div class="row m-auto">
							<div class="col-md-3 dvim">
								<img id="im1" class="simg" src="{{asset('images')}}/{{$product->image1}}" alt="im1" onclick="change();">
							</div>
							<div class="col-md-3 dvim">
								<img id="#" class="simg" src="{{asset('images')}}/{{$product->image2}}" onclick="change1();">
							</div>
							<div class="col-md-3 dvim">
								<img id="#" class="simg" src="{{asset('images')}}/{{$product->image3}}" onclick="change2();">
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="card cd col-md-3">
										<div class="card-header">
											<a href="{{route('user.cartshow')}}"><img id="cart" src="{{asset('images')}}/admin/order.png"></a>
											<p id="item">Items:{{$cartItem}}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row m-auto">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-10 dvpd m-auto">
						<a href="">Details</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-10 m-auto">
								<div class="card col-md-6">
									<div class="card-body">
										<table class="table table-bordered table-md table-striped">
											@if($specifications)
												@forelse($specifications as $specification)
												<tr>
													<td>{{$specification}}</td>
												</tr>
												@empty
													aksrhfserhkf
												@endforelse
											@endif
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection