<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Invoice;
use PDF;

class PdfController extends Controller
{
    public function pdf(Request $request,$id)
    {
    	$users = DB::table('view_order')
            ->where('invoice_id',$id)->get();
            // dd($users);
        $invoices=Invoice::where('user_id',$request->session()->get('loggedUser'))
        ->get();
        $total=0;
        foreach ($invoices as $invoice) {
            $total=$invoice->totalprice++;
        }

    	$pdf = PDF::loadview('User.invoice',compact('users','total'));
    	return $pdf->download('invoice.pdf');
    }
    public function test($value='')
    {
    	$pdf=PDF::loadView("User.test");
    	return $pdf->download('Test.pdf');
    }
}
