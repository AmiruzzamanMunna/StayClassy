<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
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
        return view('User.user-login')
         ->with('products', $products)
            ->with('productsnew', $productsnew)
            ->with('productspopular', $productspopular);
            
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
    public function account(Request $request)
    {
        $users = DB::table('view_invoice')->where('id', $request->session()->get('loggedUser'))->get();
        return view("User.account")
        ->with("users", $users);
    }
    public function invoiceInfo(Request $request,$id)
    {
        $orders = DB::table('view_order')
            ->where('userid',$request->session()->get('loggedUser'))
            ->where('invoice_id',$id)
            ->paginate(10);
            return view("User.invoiceinfo")
            ->with("orders",$orders);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route('user.index'));
    }
    public function index(Request $request)
    {
        if ($request->session()->get('loggedUser')) {
            $cartItem = Carttbl::where('user_id', $request->session()->get('loggedUser'))
                ->sum('quantity');
        }else{
            $cartItem = 0;
        }
        $products = Product::all();
        $user=User::all();
        $productsnew = Product::where('newarrival',1)->get();
        $productspopular = Product::where('sold_item',1)->get();
        $cart=Carttbl::all();
        $socials = Social::all();
    	return view("User.index")
            ->with('cartItem', $cartItem )
            ->with('user', $user)
            ->with('products', $products)
            ->with('cart', $cart)
            ->with('productsnew', $productsnew)
            ->with('productspopular', $productspopular)
            ->with("socials", $socials);
    }
    public function signup()
    {
        return view("User.sign-up");
            
    }
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
        return view("User.category")
            ->with('cartItem', $cartItem)
            ->with('products', $products);
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
        return view("User.category")
            ->with('products', $products)
            ->with('cartItem', $cartItem);
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
        return view("User.category")
            ->with('cartItem', $cartItem)
            ->with('products', $products)
            ->with('products', $products);
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
        return view("User.category")
            ->with('cartItem', $cartItem)
            ->with('products', $products);
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
        return view("User.category")
            ->with('cartItem', $cartItem)
            ->with('products', $products);
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
        $specifications = json_decode($product->specification);
    	return view("User.details")
            ->with("cartItem", $cartItem)
            ->with("user", $user)
            ->with("product", $product)
            ->with('specifications', $specifications);   
    }
    
    public function checkout(Request $request)
    {
        $user = User::all();
    	return view("User.checkout")
        ->with('user',$user);
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
        return view("User.invoice")
        ->with("users",$users);
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
        return view("User.cart")
            ->with('cartItem',$cartItem)
            ->with('carts',$carts);
    }
    public function cartedit(Request $request, $id)
    {
        $cart=Carttbl::all()
        ->where('id',$id);
        return view("User.updatecart")
        ->with("cart",$cart);
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
    public function quality(Request $request)
    {
        $qualitys=Quality::all();
        return view('User.footer')
        ->with('qualitys',$qualitys);
    }
    public function policy(Request $request)
    {
        $qualitys=Policy::all();
        return view('User.footer')
        ->with('qualitys',$qualitys);
    }
    public function shipping(Request $request)
    {
        $qualitys=Shipping::all();
        return view('User.footer')
        ->with('qualitys',$qualitys);
    }
    public function customerservice(Request $request)
    {
         $qualitys=Customerservice::all();
        return view('User.footer')
        ->with('qualitys',$qualitys);
    }
    public function about(Request $request)
    {
         $qualitys=About::all();
        return view('User.footer')
        ->with('qualitys',$qualitys);
    }
    public function contact(Request $request)
    {
        $qualitys=Contact::all();
        return view('User.footer-contact')
        ->with('qualitys',$qualitys);
    }   
}
