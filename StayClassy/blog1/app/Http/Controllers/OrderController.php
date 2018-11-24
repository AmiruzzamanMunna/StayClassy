<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\OrderShow;
use App\Invoice;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = DB::table('view_invoice')
        ->orderBy('invoice_id','desc')
        ->paginate(5);
    	return view("Admin.order")
    	->with('orders',$orders);
    }
    public function orderdetails(Request $request, $id)
    {
    	$orders = DB::table('view_order')
            ->where('invoice_id', $id)
            ->paginate(10);
    	return view("Admin.ordersinfo")
    	->with("orders",$orders)
        ->with('invoice_id', $id);
    }
    public function pending(Request $request)
    {
        $orders = DB::table('view_invoice')
            ->where('status', 1)
            ->paginate(5);
        return view("Admin.order")
        ->with('orders',$orders);
    }
    public function delivered(Request $request)
    {
        $orders = DB::table('view_invoice')
            ->where('status', 2)
            ->paginate(5);
        return view("Admin.order")
        ->with('orders',$orders);
    }
    public function returned(Request $request)
    {
        $orders = DB::table('view_invoice')
            ->where('status', 3)
            ->paginate(5);
        return view("Admin.order")
        ->with('orders',$orders);
    }
    public function canceled(Request $request)
    {
        $orders = DB::table('view_invoice')
            ->where('status', 4)
            ->paginate(5);
        return view("Admin.order")
        ->with('orders',$orders);
    }
    public function statusdelivered(Request $request,$id)
    {         
        $orders=Invoice::where('id',$id)->first();
        if($orders){
            $orders->status=2;
            $orders->save();
        }
        return back();    
    }
    public function statusreturned(Request $request,$id)
    {         
        $orders=Invoice::where('id',$id)->first();
        if($orders){
            $orders->status=3;
            $orders->save();
        }
        return back();    
    }
    public function statuscanceled(Request $request,$id)
    {         
        $orders=Invoice::where('id',$id)->first();
        if($orders){
            $orders->status=4;
            $orders->save();
        }
        return back();    
    }
}
