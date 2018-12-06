<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Dompdf\Dompdf;
use App\Invoice;
use App\Transection;
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
    public function report(Request $request)
    {
        $transetions=Transection::all();
        $income = 0;
        $invest = 0;
        $profit = 0;
        $loss = 0;
        if ($transetions != null) {
            foreach ($transetions as $tr) {
                if ($tr->role == 0) {
                    $invest += $tr->amount;
                }else{
                    $income += $tr->amount;
                }
            }
        }
        if ($invest > $income) {
            $loss = $invest - $income;
        }else{
            $profit = $income - $invest;
        }
        $pdf = PDF::loadview('Admin.report',compact('transetions','income','invest','profit','loss'));
        return $pdf->download('report.pdf');
    }
    public function test($value='')
    {
    	$pdf=PDF::loadView("User.test");
    	return $pdf->download('Test.pdf');
    }
}
