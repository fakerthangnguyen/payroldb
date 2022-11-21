<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\Employee;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function index($id = null) {
        if($id == null) {
            return KhachHangModel::orderby('full_name', 'asc')->get();
        }else{
            return KhachHangModel::find($id);
        };
    }

    public function payrol($idEmployee = null){
        if($idEmployee == null) {
            return Employee::orderby('First_Name', 'asc')->get();
        }else{
            return Employee::find($idEmployee);
        };
    }
}
