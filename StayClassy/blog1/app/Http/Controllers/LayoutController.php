<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function slider($value='')
    {
    	return view("Admin.slider");
    }
    public function left($value='')
    {
    	return view("Admin.left-image");
    }
    public function right($value='')
    {
    	return view("Admin.right-image");
    }
}
