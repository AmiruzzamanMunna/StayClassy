<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function ajax(Request $request)
    {
    	$tests=Test::all();
    	return view('User.ajax')
    		->with('tests',$tests);
    }
    public function getValues(Request $request)
    {
    	$test=new Test();
    	$test->nam=$request->nam;
    	$test->num=$request->num;
    	$test->save();
    }
    public function test(Request $request)
    {
    	$categories=Test::all();
    	return view('User.test2')
    		->with('categories',$categories);
    }
    public function deletelist(Request $request)
    {
    	$ids=$request->ids;
    	if ($ids) {
    		Test::wherein('id',explode(",",$ids))->delete();
    		return redirect()->route('test.test');
    	}
    }
}
