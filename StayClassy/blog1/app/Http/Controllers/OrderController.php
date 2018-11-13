<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
    	return view("Admin.order");
    }
    public function orderdetails()
    {
    	return view("Admin.orderdetails");
    }
}
