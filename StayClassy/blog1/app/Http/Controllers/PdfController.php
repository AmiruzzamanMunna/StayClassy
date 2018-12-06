<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Dompdf\Dompdf;
use App\Invoice;
use PDF;

class PdfController extends Controller
{
    public function pdf(Request $request,$id)
    {
    	$users = DB::table('view_order')
            ->where('invoice_id',$id)->get();
        $invoices=Invoice::where('user_id',$request->session()->get('loggedUser'))
        ->get();
        $total=0;
        foreach ($invoices as $invoice) {
            $total=$invoice->totalprice++;
        }

    	$pdf = PDF::loadview('User.downinvoice',compact('users','total'));
    	return $pdf->download('invoice.pdf');
        return view('User,invoice');
    }
    public function test($value='')
    {
    	$pdf=PDF::loadView("User.test");
    	return $pdf->download('Test.pdf');
    }
}
