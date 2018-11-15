<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\OrderShow;
class OrderController extends Controller
{
    public function order()
    {
    	return view("Admin.order");
    }
    public function orderdetails($id)
    {
    	$order=OrderShow::all()
    	->where('id',$id);
    	return view("Admin.orderdetails")
    	->with("order",$order);
    }
}
