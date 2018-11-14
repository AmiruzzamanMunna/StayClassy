<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\StuffRequest;
use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Product;
use App\Social;
use App\Quality;
use App\Returnpolicy;
use App\Shipping;
use App\Customerservice;
use App\Contact;
use App\Policy;
use App\About;
use App\User;
use App\Order;
use App\Carttbl;
use Cart;

class UserController extends Controller
{
	public function layout2($value='')
	{
		return view("layouts.Product-Details");
	}
    public function layout1($value='')
    {
    	return view("layouts.User-Home");
    }
     public function userlogin()
    {
        $products = Product::all();
        $productsnew = Product::where('newarrival',1)->get();
        $productspopular = Product::where('sold_item',1)->get();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view('User.user-login')
         ->with('products', $products)
            ->with('productsnew', $productsnew)
            ->with('productspopular', $productspopular)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
    }
    public function uservarify(UserLoginRequest $request)
    {
        $user =User::where('username',$request->username)
        ->where('password',$request->password)->first();
        if ($user) {
            $request->session()->put('loggedUser', $user->id);
            $request->session()->flash('message','Login Successfull');
            return redirect()->route('user.index');
        }
        else{
            $request->session()->flash('message','Login Unseccessfull');
            return back();
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return back();
    }
    public function index()
    {
        $products = Product::all();
        $user=User::all();
        $productsnew = Product::where('newarrival',1)->get();
        $productspopular = Product::where('sold_item',1)->get();
        $cart=Carttbl::all();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
    	return view("User.index")
            ->with('user', $user)
            ->with('products', $products)
            ->with('cart', $cart)
            ->with('productsnew', $productsnew)
            ->with('productspopular', $productspopular)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
    }
    public function signup()
    {
        return view("User.sign-up");
            
    }
    // public function varify(RegisterRequest $request)
    // {
    //     return back();
    // }
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->mobile1=$request->mobile1;
        $user->mobile2=$request->mobile2;
        $user->address=$request->address;
        $user->password=$request->password;
        $user->confirm_password=$request->confirm_password;
        $user->save();
        $request->session()->flash('message','Registered Successfully');
        return back();
    }
    
    public function category($name)
    {
        $products = DB::table('view_product')
        ->where('category_name',$name)->paginate(5);
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.category")
            ->with('products', $products)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
    }
    public function type($name)
    {

        $products = DB::table('view_product')
        ->where('type_name',$name)->paginate(5);
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.category")
            ->with('products', $products)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
        return view("User.travelling");
    }
    public function newarrival()
    {
        $products = Product::where('newarrival',1)->paginate(5);
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.category")
            ->with('products', $products)
            ->with('products', $products)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
    }
   
    public function offers()
    {
    	$products = Product::where('discount','>',0)->paginate(5);
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.category")
            ->with('products', $products)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
    }
    public function details(Request $request, $id)
    {
        $product = DB::table("view_product")
            ->where('id', $id)
            ->first();
        $user=User::all();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        $specifications = json_decode($product->specification);
    	return view("User.details")
            ->with("user", $user)
            ->with("product", $product)
            ->with('specifications', $specifications)
            ->with("socials", $socials)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);

        
    }
    
    public function checkout(Request $request,$id)
    {
        $user = User::all()
        ->where('id',$id);
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
    	return view("User.checkout")
        ->with('user',$user)
        ->with("socials", $socials)
        ->with("qualitys", $qualitys)
        ->with("returns", $returns)
        ->with("shippings", $shippings)
        ->with("customers", $customers)
        ->with("contacts", $contacts)
        ->with("policys", $policys)
        ->with("abouts", $abouts);
    }
    public function varify1(Request $request,$id)
    {
       $user= User::all()
        ->where('id',$id)
        ->first();
        return redirect()->route("user.voucher")
        ->with('user',$user);
    }

    public function voucher(Request $request,$id)
    {
        $user= Product::all()
        ->where('id',$id)
        ->first();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.voucher")
        ->with('product',$product)
        ->with("qualitys", $qualitys)
        ->with("returns", $returns)
        ->with("shippings", $shippings)
        ->with("customers", $customers)
        ->with("contacts", $contacts)
        ->with("policys", $policys)
        ->with("abouts", $abouts);

    }
    public function cart(Request $request,$id)
    {
        $Quantity=$request->Quantity;
        $product=Product::where('id',$id)
        ->first();
        Cart::add([
            'id'=>$id,
            'name'=>$product->product_name,
            'qty'=>$request->Quantity,
            'price'=>$product->product_price,
            
        ]);
        return back();
       
    }
    public function cartshow()
    {
        $user = User::all();
        $carts=Carttbl::all();
        $product=Product::all();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.cart")
        ->with('user',$user)
        ->with('product',$product)
        ->with('carts',$carts)
        ->with("qualitys", $qualitys)
        ->with("returns", $returns)
        ->with("shippings", $shippings)
        ->with("customers", $customers)
        ->with("contacts", $contacts)
        ->with("policys", $policys)
        ->with("abouts", $abouts);
    }
    public function cartedit($id)
    {
        $cart=Carttbl::all()
        ->where('id',$id);
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.updatecart")
        ->with("cart",$cart)
        ->with("qualitys", $qualitys)
        ->with("returns", $returns)
        ->with("shippings", $shippings)
        ->with("customers", $customers)
        ->with("contacts", $contacts)
        ->with("policys", $policys)
        ->with("abouts", $abouts);
    }
    public function cartupdate(Request $request,$id)
    {
        $cart=Carttbl::find($request->id);
        $cart->quantity=$request->Quantity;
        $cart->save();
         return redirect()->route("user.cartshow");
    }
    public function cartremove(Request $request,$id)
    {
        $cart=Carttbl::find($request->id);
        $cart->delete();
        return back();
    }
    public function orderstore(Request $request)
    {
        $cart=Carttbl::all();
        $order = new Order();
        foreach ($cart as $cart) {
            $order->userid=$cart->user_id;
            $order->productid=$cart->product_id;
            $order->productquantity=$cart->quantity;
            $order->price=$cart->unit_price;
            $order->invoice_id=1;
            $order->save();
        }
        return back();
    }
}
