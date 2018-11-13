@extends("layouts.User-Home");
@section('title')
	Cart
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/cart.css">
@endsection
@section('container')
	<div class="row">
        <div class="col-md-12">
            <div class="row">
            	<div class="col-md-7 m-auto">
            		<div class="card">
            			<form method="POST">
            				{{csrf_field()}}
			            	<div class="card-header">Cart</div>
			            	<div class="card-body">
			            		<table class="table table-bordered table-striped table-hover">
				                    <tr>
				                        <th>User id</th>
				                        <th>Product Id</th>
				                        <th>Quantity</th>
				                        <th>Unit Price</th>
				                        <th>Subtotal</th>
				                        <th>Remove</th>
				                        <th>Update</th>
				                    </tr>
				                    <?php
				                    	$total=0;
				                    	$Subtotal=0;
				                    ?>
				                    @foreach($carts as $cart)
				                    <tr>
				                    	<td>{{$cart->user_id}}</td>
				                    	<td>{{$cart->product_id}}</td>
				                    	<td>{{$cart->quantity}}</td>
				                    	<td>{{$cart->unit_price}}</td>
				                    	<?php

				                    		$Subtotal=$cart->quantity*$cart->unit_price;
				                    		$total=$total+$Subtotal;
				                    	?>
				                    	<td>{{$Subtotal}}</td>
				                    	<td><a href="{{route('user.cartremove',[$cart->id])}}">Remove</a></td>
				                    	<td><a href="{{route('user.cartedit',[$cart->id])}}">Update</a></td>
				                    </tr>
				                	@endforeach
		           			 	</table>
		           			 	<div class="row">
		           			 		<div class="col-md-12">
		           			 			<div class="row">
		           			 				<div class="col-md-9 ml-auto">
		           			 					<label class="pull-right">Total Price:{{$total}}</label>
		           			 				</div>
		           			 			</div>
		           			 		</div>
		           			 	</div>
	            			</div>
	            			<div class="card-footer">
	            				<div class="row">
	            					<div class="col-md-9">
	            					<button type="button" class="btn btn-default"><a href="{{route('user.index')}}">Go Shopping</a></button>
	            				</div>
	            				<div class="col-md-2 ml-auto">
	            					<button type="submit" class="btn btn-basic">Order</button>
	            				</div>
	            			</div>
	            		</form>
           			 </div>
            	</div>
            </div>
        </div>
    </div>
@endsection