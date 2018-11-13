<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Carttbl;
use App\Product;

class AjaxController extends Controller
{
	public function addCart(Request $request)
	{
		$user = $request->session()->get('loggedUser');
		$product = Product::find($request->id);
		$cart = new Carttbl();
		$cart->user_id = $user;
		$cart->product_id = $request->id;
		$cart->quantity = $request->qnt;
		if ($product->discount > 0) {
			$cart->unit_price = $product->product_price - ($product->product_price * $product->discount/100);
		}else{
			$cart->unit_price = $product->product_price;
		}
		if ($cart->save() > 0) {
			return 1;
		}else{
			return 0;
		}
	}
}