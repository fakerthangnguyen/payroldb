<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardContronller extends Controller
{
    public function index(){
        return view('admin.pages.dashboard');
    }

    public function employeeCreate(){
        return view('admin.pages.employeeCreate');
    }
}
