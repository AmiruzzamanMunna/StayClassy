<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageServiceProvider;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Status;
use App\Category;
use App\Type;

class ProductController extends Controller
{
    public function index()
    {
    	return view("Admin.product");
    }
    public function create()
    {
        $categories = Category::all();
        $types = Type::all();
    	return view("Admin.productnew")
            ->with('categories', $categories)
            ->with('types', $types);
    }
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->product_name = $request->pname;
        $product->code = $request->code;
        $product->buy_price = $request->buyprice;
        $product->product_price = $request->price;
        $product->discount = $request->discount;
        $product->product_quantity = $request->quantity;
        $product->newarrival = $request->new;
        $product->category_fk = $request->category;
        $product->type_fk = $request->type;
        if($request->hasFile('img1')) {
            $image1 = $request->file('img1');
            $imagename = $product->code."-1.".$image1->getClientOriginalExtension();
            $destinationPath = public_path('images/product');
            $image1->move($destinationPath, $imagename);
            $product->image1 ='product/'.$imagename;
        }
        if($request->hasFile('img2')) {
            $image2 = $request->file('img2');
            $imagename2 =  $product->code."-2.".$image2->getClientOriginalExtension();
            $destinationPath = public_path('images/product');
            $image2->move($destinationPath, $imagename2);
            $product->image2 ='product/'.$imagename2;
        }
        if($request->hasFile('img3')) {
            $image3 = $request->file('img3');
            $imagename3 =  $product->code."-3.".$image3->getClientOriginalExtension();
            $destinationPath = public_path('images/product');
            $image3->move($destinationPath, $imagename3);
            $product->image3 ='product/'.$imagename3;
        }
        $product->status_fk = $request->status;
        $product->sold_item= $request->sold_item;
        $product->specification = json_encode($request->specification);
        $product->save();
        $request->session()->flash('message','Data Inserted');
    	return redirect()->route("product.create");
    }
    public function edit()
    {
        # code...
    }
    public function update(Request $request)
    {
        // $product = DB::table('view_product')
        //     ->where("name", "asdf")
        //     ->get();
        // $product->name = name;
        // $product->code = name;
        // $product->price = name;
        // $product->save();
    }
}
