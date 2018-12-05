<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Carttbl;
use App\Product;
use App\Transection;

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
		$cart->total_price = $cart->unit_price * $cart->quantity;
		if ($cart->save() > 0) {
			$numProducts = Carttbl::where('user_id', $user)
					->sum('quantity');
			return $numProducts;
		}else{
			return -1;
		}
	}
	public function catFilter(Request $request)
	{
		$products = DB::table('view_product')
			->whereIn("category",$request->catList)
			->get();
		$data = "<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Code</th>
				<th>Category</th>
				<th>Type</th>
				<th>Buy Price</th>
				<th>Price</th>
				<th>Discount %</th>
				<th>Quantity</th>
			</tr>";
		foreach ($products as $product) {
			$data =  $data."<tr>
			<td><img src='images/$product->image1' class='ig'></td>
			<td><a href='/productupdate/{$product->id}'>$product->product_name</a></td>
			<td>$product->code</td>
			<td>$product->category_name</td>
			<td>$product->type_name</td>
			<td>$product->buy_price</td>
			<td>$product->product_price</td>
			<td>$product->discount</td>
			<td>$product->product_quantity</td>
		</tr>";
		}
		return $data;
	}
	public function typeFilter(Request $request)
	{
		$products = DB::table('view_product')
			->whereIn("type",$request->Type)
			->get();
		$data = "<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Code</th>
				<th>Category</th>
				<th>Type</th>
				<th>Buy Price</th>
				<th>Price</th>
				<th>Discount %</th>
				<th>Quantity</th>
			</tr>";
		foreach ($products as $product) {
			$data =  $data."<tr>
			<td><img src='images/$product->image1' class='ig'></td>
			<td><a href='/productupdate/{$product->id}'>$product->product_name</a></td>
			<td>$product->code</td>
			<td>$product->category_name</td>
			<td>$product->type_name</td>
			<td>$product->buy_price</td>
			<td>$product->product_price</td>
			<td>$product->discount</td>
			<td>$product->product_quantity</td>
		</tr>";
		}
		return $data;
	}
	// public function transactionHistory(Request $request)
	// {
	// 	$startDate = $request->startDate;
	// 	$endDate = $request->endDate;
	// 	$role = $request->role;
	// 	$trHistory = '';
	// 	if ($role == null) {
	// 		$trHistory = Transection::where('date', '>=', $startDate)
	// 			->where('date', '<=', $endDate)
	// 			->get();
	// 	}else{
	// 		$trHistory = Transection::where('date', '>=', $startDate)
	// 			->where('date', '<=', $endDate)
	// 			->where('role', $role)
	// 			->get();
	// 	}
	// }
}