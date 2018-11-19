<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\OrderShow;
class OrderController extends Controller
{
    public function order()
    {
    	$orders =OrderShow::paginate(5);
    	return view("Admin.order")
    	->with('orders',$orders);
    }
    public function orderdetails($id)
    {
    	$order=OrderShow::all()
    	->where('id',$id);
    	return view("Admin.orderdetails")
    	->with("order",$order);
    }
}
