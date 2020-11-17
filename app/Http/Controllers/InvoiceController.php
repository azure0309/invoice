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
      // Suuliin sariin hereglee hiisen dugaaruud
      $last_month_numbers = Models\SimInvoice::where('BILL_MONTH', 202003)->
      where('BILL_STATUS', 'UNPAID')->get();

      // return view('invoice', ['last_month_numbers'=>$last_month_numbers]);
      // echo $last_month_numbers;
      foreach ($last_month_numbers as $number)
      {
        $getOperator = Models\SimInfo::where('PROD_NO', $number['PROD_NO'])->get('NAME');
        foreach ($getOperator as $operator)
        {
          // echo $operator;
          $getThreshold = Models\ThresholdModel::where('OPERATOR', $operator['NAME'])->get('THRESHOLD_TYPE');
          foreach ($getThreshold as $threshold)
          {
            if ($threshold['THRESHOLD_TYPE'] == 'per SIM')
            {
              echo $number . 'per';
            }
            elseif ($threshold['THRESHOLD_TYPE'] == 'total SIM')
            {
              echo $number . 'total';
            }
          }
        }
        
        // echo $getThreshold;
        // return view('invoice', ['getOperator'->$getOperator]);
      }
      
      // echo $unpaid_numbers;
    }
}