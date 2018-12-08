<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
class MailController extends Controller
{
	public function index(Request $request)
	{
		return view('User.test');
	}
    public function mail(Request $request)
    {
    	Mail::send('munna.ak17@gmail.com')->send(new Mail());
    }
}
