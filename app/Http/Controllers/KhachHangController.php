<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\categories;
use App\Models\Employee;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{


    public function payrol(Employee $a = null){
        if($a == null){
            return Employee::orderby('First_Name', 'asc')->get();
        }else {
            return $a;
        }
    }

}
