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
use App\Invoice;
use Cart;

class UserController extends Controller
{
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
    
    public function category(Request $request, $name)
    {
        if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
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
            ->with('cartItem', $cartItem)
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
    public function type(Request $request, $name)
    {
        if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
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
            ->with('cartItem', $cartItem)
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
    public function newarrival(Request $request)
    {
        if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
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
            ->with('cartItem', $cartItem)
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
   
    public function offers(Request $request)
    {
        if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
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
            ->with('cartItem', $cartItem)
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
     public function duffel(Request $request,$name)
    {
        if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
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
            ->with('cartItem', $cartItem)
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
         if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
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
            ->with("cartItem", $cartItem)
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
    
    public function checkout(Request $request)
    {
        $user = User::all();
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
    public function orderstore(CheckoutRequest $request)
    {
        $userid = $request->session()->get('loggedUser');
        $carts = Carttbl::where('user_id', $userid)
            ->get();
        $invoice = new Invoice();
        $invoice->user_id = $userid;
        $invoice->order_date = date('Y-m-d');
        $invoice->status = 1;
        $totalprice = 0;
        foreach ($carts as $cart) {
            $totalprice += $cart->total_price;
        }
        $invoice->totalprice = $totalprice;
        if ($invoice->save() > 0) {
            foreach ($carts as $cart) {
                $order = new Order();
                $order->product_id=$cart->product_id;
                $order->quantity=$cart->quantity;
                $order->name=$request->name;
                $order->mobile1=$request->mobile1;
                if ($request->mobile2) {
                    $order->mobile2=$request->mobile2;
                }
                $order->address=$request->address;
                $order->email=$request->email;
                $order->userid=$request->session()->get('loggedUser');
                $order->cart_id=$cart->id;
                $order->totalprice=$cart->total_price;
                $order->invoice_id = $invoice->id;
                $product = Product::find($cart->product_id);
                $product->product_quantity = $product->product_quantity - $cart->quantity;
                $product->save();
                if ($order->save() > 0) {
                    $cart = Carttbl::where('user_id', $userid)
                        ->delete();
                }
            }
        }
        return redirect()->route('user.invoice', [$invoice->id]);
    }

    public function invoice(Request $request,$id)
    {
        $users = DB::table('view_order')
            ->where('invoice_id', $id)
            ->get();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.invoice")
        ->with("users",$users)
        ->with("qualitys", $qualitys)
        ->with("returns", $returns)
        ->with("shippings", $shippings)
        ->with("customers", $customers)
        ->with("contacts", $contacts)
        ->with("policys", $policys)
        ->with("abouts", $abouts);

    }

    public function cartshow(Request $request)
    {
         if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
        $carts = Carttbl::where('user_id', $request->session()->get('loggedUser'))
            ->get();
        $socials = Social::all();
        $qualitys = Quality::all();
        $returns = Returnpolicy::all();
        $shippings = Shipping::all();
        $customers = Customerservice::all();
        $contacts = Contact::all();
        $policys = Policy::all();
        $abouts = About::all();
        return view("User.cart")
            ->with('cartItem',$cartItem)
            ->with('carts',$carts)
            ->with("qualitys", $qualitys)
            ->with("returns", $returns)
            ->with("shippings", $shippings)
            ->with("customers", $customers)
            ->with("contacts", $contacts)
            ->with("policys", $policys)
            ->with("abouts", $abouts);
    }
    public function cartedit(Request $request, $id)
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
    
}
