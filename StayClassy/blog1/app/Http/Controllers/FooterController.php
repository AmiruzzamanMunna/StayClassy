<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Social;
use App\Quality;
use App\Returnpolicy;
use App\Shipping;
use App\Customerservice;
use App\Contact;
use App\policy;
use App\About;

class FooterController extends Controller
{
    public function create()
    {
        $social= Social::all();
    	return view("Admin.social")
        ->with("social",$social);
    }
    public function store(Request $request)
    {
        $social= new Social();
        $social->facebook=$request->facebook;
        $social->twitter=$request->twitter;
        $social->instagram=$request->instagram;
        $social->youtube=$request->youtube;
        $social->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.create");
    }
    public function edit($id)
    {
        $social=Social::all()
        ->where("id",$id);
        return view("Admin.updatesocial")
        ->with("social",$social);
    }
    public function update(Request $request,$id)
    {
        $social=Social::find($request->id);
        $social->facebook=$request->facebook;
        $social->twitter=$request->twitter;
        $social->instagram=$request->instagram;
        $social->youtube=$request->youtube;
        $social->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.create");
    }
    public function qualitycreate()
    {
        $qualitys=Quality::all();
    	return view("Admin.quality")
        ->with("qualitys",$qualitys);
    }
    public function qualitystore(Request $request)
    {
        $quality = new Quality();
        $quality->heading=$request->heading;
        $quality->title=$request->title;
        $quality->description=$request->description;
        $quality->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.qualitycreate");
    }
    public function qualityedit($id)
    {
        $qualitys=Quality::all()
        ->where('id',$id);
        return view("Admin.updatequality")
        ->with("qualitys",$qualitys);
    }
    public function qualityupdate(Request $request,$id)
    {
        $quality=Quality::find($request->id);
        $quality->heading=$request->heading;
        $quality->title=$request->title;
        $quality->description=$request->description;
        $quality->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.qualitycreate");

    }
    public function returnpolicycreate()
    {
        $return=Returnpolicy::all();
    	return view("Admin.return-policy")
        ->with("return",$return);
    }
    public function returnpolicystore(Request $request)
    {
        $return = new Returnpolicy();
        $return->heading=$request->heading;
        $return->title=$request->title;
        $return->description=$request->description;
        $return->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.returnpolicycreate");
    }
    public function returnpolicyedit($id)
    {
        $return=Returnpolicy::all()
        ->where('id',$id);
        return view("Admin.updatereturnpolicy")
        ->with("return",$return);
    }
    public function returnpolicyupdate(Request $request ,$id)
    {
        $return = Returnpolicy::find($request->id);
        $return->heading=$request->heading;
        $return->title=$request->title;
        $return->description=$request->description;
        $return->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.returnpolicycreate");
    }
    public function shippingcreate()
    {
        $shipping = Shipping::all();
    	return view("Admin.shipping")
        ->with("shipping",$shipping);
    }
    public function shippingstore(Request $request)
    {
        $shipping=new Shipping();
        $shipping->heading=$request->heading;
        $shipping->title=$request->title;
        $shipping->description=$request->description;
        $shipping->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.shippingcreate");
    }
    public function shippingedit($id)
    {
        $shipping=Shipping::all()
        ->where("id",$id);
        return view("Admin.updateshipping")
        ->with("shipping",$shipping);
    }
    public function shippingupdate(Request $request,$id)
    {
        $shipping=Shipping::find($request->id);
        $shipping->heading=$request->heading;
        $shipping->title=$request->title;
        $shipping->description=$request->description;
        $shipping->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.shippingcreate");
    }
    public function customercreate()
    {
        $customer=Customerservice::all();
    	return view("Admin.customer-service")
        ->with("customer",$customer);
    }
    public function customerstore(Request $request)
    {
        $customer=new Customerservice();
        $customer->heading = $request->heading;
        $customer->title = $request->title;
        $customer->description = $request->description;
        $customer->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.customercreate");
    }
    public function customeredit($id)
    {
        $customer=Customerservice::all()
        ->where("id",$id);
        return view("Admin.updatecustomer")
        ->with("customer",$customer);
    }
    public function customerupdate(Request $request,$id)
    {
        $customer=Customerservice::find($request->id);
        $customer->heading = $request->heading;
        $customer->title = $request->title;
        $customer->description = $request->description;
        $customer->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.customercreate");
    }
    public function contactcreate()
    {
        $contact=Contact::all();
    	return view("Admin.contact")
        ->with("contact",$contact);
    }
    public function contactstore(Request $request)
    {
        $contact=new Contact();
        $contact->heading=$request->heading;
        $contact->contactnumber=$request->contactnumber;
        $contact->email=$request->email;
        $contact->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.contactcreate");
    }
    public function contactedit($id)
    {
        $contact=Contact::all()
        ->where('id',$id);
        return view("Admin.updatecontact")
        ->with("contact",$contact);
    }
    public function contactupdate(Request $request,$id)
    {
        $contact=Contact::find($request->id);
        $contact->heading=$request->heading;
        $contact->contactnumber=$request->contactnumber;
        $contact->email=$request->email;
        $contact->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.contactcreate");
    }
    public function policycreate()
    {
        $policy=Policy::all();
    	return view("Admin.policy")
        ->with("policy",$policy);
    }
    public function policystore(Request $request)
    {
        $policy=new Policy();
        $policy->heading=$request->heading;
        $policy->title=$request->title;
        $policy->description=$request->description;
        $policy->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.policycreate");

    }
    public function policyedit($id)
    {
        $policy=Policy::all()
        ->where("id",$id);
        return view("Admin.updatepolicy")
        ->with("policy",$policy);
    }
    public function policyupdate(Request $request,$id)
    {
        $policy=Policy::find($request->id);
        $policy->heading=$request->heading;
        $policy->title=$request->title;
        $policy->description=$request->description;
        $policy->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.policycreate");
    }
    public function aboutcreate()
    {
        $about=About::all();
    	return view("Admin.about")
        ->with("about",$about);
    }
    public function aboutstore(Request $request)
    {
        $about=new About();
        $about->heading=$request->heading;
        $about->title=$request->title;
        $about->description=$request->description;
        $about->save();
        $request->session()->flash('message','Data Inserted');
        return redirect()->route("footer.aboutcreate");
    }
    public function aboutedit($id)
    {
        $about=About::all()
        ->where('id',$id);
        return view("Admin.updateabout")
        ->with("about",$about);
    }
    public function aboutupdate(Request $request,$id)
    {
        $about=About::find($request->id);
        $about->heading=$request->heading;
        $about->title=$request->title;
        $about->description=$request->description;
        $about->save();
        $request->session()->flash('message','Data Updated');
        return redirect()->route("footer.aboutcreate");
    }
}
