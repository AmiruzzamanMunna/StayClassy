@extends('layouts.User-Home')
@section('title')
	Details
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style9.css">
	<!-- <script src="{{asset('js')}}/script2.js"></script> -->
@endsection
@section('script')
	
@endsection
@section('container')
	<div class="container-fluid">
		<div class="row ml-auto">
			<div class="col-md-12">
				<div class="row ml-auto">
					<div class="col-md-5 m-auto cat">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										@foreach($cart as $cart)
										<form method="post">
											{{csrf_field()}}
											<div class="card crd">
													<h4 class="m-auto">Product Id:{{$cart->product_id}}</h4>
												<div class="card-body">
													
													<div class="form-group row">
														<label class="col-md-6">Quantity:</label>
														<input type="text" name="Quantity" value="{{$cart->quantity}}">
														@if($errors->any())
															<ul class="m-auto">
																@foreach($errors->all() as $error)
																	<li>{{$error}}</li>
																@endforeach
															</ul>
														@endif
													</div>
													<div class=" form-group row">
														<div class="col-md-7 m-auto">
															<button type="submit" id="add-cart-button" class="btn btn-success col-md-8">Update Quantity</button>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-5">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="card cd col-md-3">
											<div class="card-header">
												<a href="{{route('user.cartshow')}}"><img id="cart" src="{{asset('images')}}/admin/order.png"></a>
												<p id="item">Item:{{Cart::count()}}</p>
											</div>
										</div>
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