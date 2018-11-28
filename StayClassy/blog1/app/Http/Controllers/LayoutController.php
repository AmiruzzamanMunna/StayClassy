<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use App\LeftImage;
use App\RightImage;

class LayoutController extends Controller
{
    public function slider(Request $reques)
    {
        $slider=Image::all();
    	return view("Admin.slider")
        ->with('slider',$slider);
    }
    public function sliderstore(Request $request)
    {
        $slider = new Image();
        if($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imagename = time()."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image1->move($destinationPath, $imagename);
            $slider->image1 ='slider/'.$imagename;
        }
        if($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imagename2 = time()."-2.".$image2->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image2->move($destinationPath, $imagename2);
            $slider->image2 ='slider/'.$imagename2;
        }
        if($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imagename3 = time()."-3.".$image3->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image3->move($destinationPath, $imagename3);
            $slider->image3 ='slider/'.$imagename3;
        }
        // dd($request);
        $slider->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function slideredit(Request $request,$id)
    {
        $slider=Image::where('id',$id);
        return view("Admin.slider")
        ->with('slider',$slider);
    }
    public function sliderupdate(Request $request,$id)
    {
         $slider =Image::find($request->id);
        if($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imagename = time()."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image1->move($destinationPath, $imagename);
            $slider->image1 ='slider/'.$imagename;
        }
        if($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imagename2 = time()."-2.".$image2->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image2->move($destinationPath, $imagename2);
            $slider->image2 ='slider/'.$imagename2;
        }
        if($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imagename3 = time()."-3.".$image3->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image3->move($destinationPath, $imagename3);
            $slider->image3 ='slider/'.$imagename3;
        }
        // dd($request);
        $slider->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function left(Request $request)
    {
        $lefts=LeftImage::all();
    	return view("Admin.left-image")
        ->with('lefts',$lefts);
    }
    public function leftstore(Request $request)
    {
        $left= new  LeftImage();
        if($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imagename = time()."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image1->move($destinationPath, $imagename);
            $left->image1 ='slider/'.$imagename;
        }
        $left->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function leftedit(Request $request,$id)
    {
        $lefts= LeftImage::where('id',$id);
        return view("Admin.left-image")
        ->with('lefts',$lefts);
        
    }
    public function leftupdate(Request $request)
    {
        $left=LeftImage::find($request->id);
        if($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imagename = time()."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image1->move($destinationPath, $imagename);
            $left->image1 ='slider/'.$imagename;
        }
        $left->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function right(Request $request)
    {
        $rights=RightImage::all();
    	return view("Admin.right-image")
        ->with('rights',$rights);
    }
    public function rightstore(Request $request)
    {
        $rights= new RightImage();
        if($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imagename = time()."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image1->move($destinationPath, $imagename);
            $rights->image1 ='slider/'.$imagename;
        }
        $rights->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
    public function rightedit(Request $id)
    {
        $rights=RightImage::where('id',$id);
        return view('Admin.right-image')
        ->with('rights',$rights);
    }
    public function rightupdate(Request $request,$id)
    {
        $rights=RightImage::find($request->id);
        if($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imagename = time()."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/slider');
            $image1->move($destinationPath, $imagename);
            $rights->image1 ='slider/'.$imagename;
        }
        $rights->save();
        $request->session()->flash('message','Data Inserted');
        return back();
    }
}
