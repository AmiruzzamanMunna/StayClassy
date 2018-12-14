<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\QuantityRequest;
use App\Admin;
use App\OrderShow;
use App\Order;
use App\User;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $orders = DB::table('view_invoice')
        ->orderby('invoice_id','desc')
        ->paginate(5);
        $totals=DB::table("tbl_invoice")->get();  
        $current_order=0;
        foreach($totals as $total){
            $current_order++;
        }
        $delivers=DB::table('tbl_invoice')
        ->where('status',2)->get();
        $current_deliver=0;
        foreach ($delivers as $deliver) {
            $current_deliver++;
        }
        $returns=DB::table('tbl_invoice')
        ->where('status',3)
        ->get();
        $current_return=0;
        foreach ($returns as $return) {
            $current_return++;
        }
    	return view("Admin.admin")
        ->with("orders",$orders)
        ->with("current_order",$current_order)
        ->with("current_deliver",$current_deliver)
        ->with("current_return",$current_return)
        ->with("total",$total);
    }
    public function adminsignup()
    {
       return view("Admin.adminsignup");
    }
    public function store(AdminRequest $request)
    {
        $admin = new Admin();
        $admin->name=$request->name;
        $admin->username=$request->username;
        $admin->email=$request->email;
        $admin->phone=$request->phone;
        $admin->password=$request->password;
        $admin->confirm_password=$request->confirm_password;
        $admin->save();
        $request->session()->flash('message','Registered Successfully');
        return back();
    }
    public function login(Request $request)
    {
    	return view("Admin.login");
    }
    public function varify(AdminLoginRequest $request)
    {
         $admin =Admin::where('username',$request->Username)
            ->where('password',$request->Password)->first();
        if ($admin) {
            $request->session()->put('loggedAdmin', $admin->id);
            $request->session()->flash('message','Login Successfull');
            return redirect()->route('admin.index');
        }
        else{
            $request->session()->flash('message','Login Unseccessfull');
            return back();
        }
        return redirect()->route('admin.index');
    }
    public function adminlogout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.login');
    }
    public function layout($value='')
    {
    	return view("layouts.Admin-Home");
    }
    public function manageuser()
    {
        $admins = User::all();        
        return view("Admin.manageuser")
        ->with("admins",$admins);
    }
    public function destroy(Request $request,$id)
    {
       $admins=User::find($request->id);
       $admins->delete();
        $request->session()->flash('message','Data Deleted Successfully');
        return back();
   }
}
