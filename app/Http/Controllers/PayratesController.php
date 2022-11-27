<?php

namespace App\Http\Controllers;

use App\Models\pay_rates;
use Illuminate\Http\Request;
use Throwable;

class PayratesController extends Controller
{
    public function index(pay_rates $b = null){
        if($b == null){
            return pay_rates::get();
        }
        else {
            return $b;
        }
    }

    public function create(Request $request){
        try{
            $payrate = new pay_rates();
            $payrate->idPay_Rates = $request->input('idPay_Rates');
            $payrate->Pay_Rate_Name = $request->input('Pay_Rate_Name');
            $payrate->Value = $request->input('Value');
            $payrate->Tax_Percentage = $request->input('Tax_Percentage');
            $payrate->Pay_Type = $request->input('Pay_Type');
            $payrate->Pay_Amount = $request->input('Pay_Amount');
            $payrate->PT_Level_C = $request->input('PT_Level_C');
            $payrate->save();
            return $payrate;
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }

    public function  update($b, Request $request){
        try{
            $payrate =  pay_rates::find($b);
            if($payrate){
            $payrate->idPay_Rates = $request->input('idPay_Rates');
            $payrate->Pay_Rate_Name = $request->input('Pay_Rate_Name');
            $payrate->Value = $request->input('Value');
            $payrate->Tax_Percentage = $request->input('Tax_Percentage');
            $payrate->Pay_Type = $request->input('Pay_Type');
            $payrate->Pay_Amount = $request->input('Pay_Amount');
            $payrate->PT_Level_C = $request->input('PT_Level_C');
            $payrate->save();
            return $payrate;
            }else {
                return 'Data not found';
            }
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }

    public function delete($b){
        try{
            $payrate = pay_rates::find($b);
            if($payrate){
                $payrate->delete();
                return $payrate;
            }else {
                return 'Data not found';
            }
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }
}
