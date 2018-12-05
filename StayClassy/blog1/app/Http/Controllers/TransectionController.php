<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transection;

class TransectionController extends Controller
{
    public function index(Request $request)
    {
    	//$transetions=Transection::all();
    	$transetions = [];
    	$income = 0;
        $invest = 0;
        $profit = 0;
        $loss = 0;
      
         return view("Admin.transection")
         ->with('income',$income)
         ->with('invest',$invest)
         ->with('loss',$loss)
  	     ->with('profit',$profit)
         ->with('transetions',$transetions);
    }
     public function transactionHistory(Request $request)
    {
        $transetions=Transection::where('date','>=',$request->startdate)
                                ->where('date','<=',$request->enddate)
                                ->get();
        $income = 0;
        $invest = 0;
        $profit = 0;
        $loss = 0;
        if ($transetions != null) {
        	foreach ($transetions as $tr) {
        		if ($tr->role == 0) {
        			$invest += $tr->amount;
        		}else{
        			$income += $tr->amount;
        		}
        	}
        }
        if ($invest > $income) {
        	$loss = $invest - $income;
        }else{
        	$profit = $income - $invest;
        }
         return view("Admin.transection")
         ->with('income',$income)
         ->with('invest',$invest)
  	     ->with('profit',$profit)
  	     ->with('loss',$loss)
  	     ->with('transetions',$transetions);
    }
}
