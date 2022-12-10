<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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

    public function employeeCreate(Request $request){
        Employee::create($request->all());

        return response()->json([
            'status'  => true,
            'mess'    => 'thành công',
        ]);
    }
    public function delete(Request $request){
        $delete = Employee::where('idEmployee', $request->idEmployee)->first();
        $delete->delete();
        return response()->json([
            'status'  => true,
            'mess'    => 'Đã xóa ',
        ]);
    }

    public function update(Request $request){
        $update = Employee::where('idEmployee', $request->idEmployee)->first();
        $update->update($request->all());
        return response()->json([
            'status'  => true,
            'mess'    => 'Đã cập nhật ',
        ]);
    }
}
