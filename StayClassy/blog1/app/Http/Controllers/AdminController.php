<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\AdminRequest;
use App\Admin;
use App\OrderShow;
use App\Order;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $orders = DB::table('view_invoice')->paginate(5);
    	return view("Admin.admin")
        ->with("orders",$orders);
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
    public function varify(LoginRequest $request)
    {
         $admin =Admin::where('username',$request->username)
            ->where('password',$request->password)->first();
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
