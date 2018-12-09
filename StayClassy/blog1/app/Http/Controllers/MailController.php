<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
//use Illuminate\Mail\Mailable;
use Mail;
use App\Mail\PasswordRecover;

class MailController extends Controller
{
	public function index(Request $request)
	{
		return view('User.test');
	}
    public function mail(Request $request)
    {
    	Mail::send(new PasswordRecover());
    }
}
