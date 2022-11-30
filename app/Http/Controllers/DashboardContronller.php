<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardContronller extends Controller
{
    public function index(){
        return view('admin.pages.employee');
    }

    public function getData(){
        $data = Employee::get();

        return response()->json([
            'employeeData' => $data,
        ]);
    }
}
