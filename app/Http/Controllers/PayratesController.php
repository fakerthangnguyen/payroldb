<?php

namespace App\Http\Controllers;

use App\Models\pay_rates;
use Illuminate\Http\Request;

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
}
