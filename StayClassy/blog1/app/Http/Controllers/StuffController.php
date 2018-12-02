<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StuffRequest;
use App\Admin;

class StuffController extends Controller
{
    public function create()
    {
    	return view("Admin.stuff");
    }
    public function store(StuffRequest $request)
    {
        $stuff = new Admin();
        $stuff->name = $request->name;
        $stuff->username = $request->username;
        $stuff->phone = $request->phone;
        $stuff->email = $request->email;
        $stuff->password = $request->password;
        $stuff->confirm_password = $request->confirm_password;
        $stuff->save();
        $request->session()->flash('message','Data Inserted Successfully');
    	return redirect()->route("stuff.create");
    }
    public function stufflist()
    {
        $stuffs = Admin::all();
        return view("Admin.stufflist")
        ->with("stuffs",$stuffs);
    }
    public function edit(Request $request)
    {
        $stuffs = Admin::all()
        ->where('id',$request->session()->get("loggedAdmin"));
        return view("Admin.updatestuff")
        ->with("stuffs", $stuffs);
    }
    public function update(Request $request)
    {
        $stuff = Admin::find($request->session()->get("loggedAdmin"));
        $stuff->name = $request->name;
        $stuff->phone = $request->phone;
        $stuff->email = $request->email;
        $stuff->password = $request->password;
        $stuff->confirm_password = $request->confirm_password;
        $stuff ->save();
        $request->session()->flash('message','Data Updated Successfully');
        return back();
        
    }
   public function destroy(Request $request,$id)
   {
       $stuffs=Admin::find($request->id);
       $stuffs->delete();
        $request->session()->flash('message','Data Deleted Successfully');
        return redirect()->route("stuff.stufflist");
   }
}
