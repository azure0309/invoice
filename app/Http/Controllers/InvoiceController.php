<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{

    function getThresholdType()
    {
      $threshold_type = Models\ThresholdModel::all();
      echo $threshold_type;
    }
    function show()
    {
      $prev_month = date('Ym',strtotime("-2 month"));
      // return gettype(intval($prev_month));
      $unpaid_numbers = Models\SimInvoice::where('BILL_MONTH', intval($prev_month))->
      where('BILL_STATUS', 'UNPAID') ->get();
      return view('invoice', ['unpaid_numbers'=>$unpaid_numbers]);
      // echo $unpaid_numbers;
    }
}
