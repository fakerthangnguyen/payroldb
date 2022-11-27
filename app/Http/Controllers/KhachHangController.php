<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\cart;
use App\Models\categories;
use App\Models\Employee;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;
use Throwable;

class KhachHangController extends Controller
{


    public function payrol(Employee $a = null){
        if($a == null){
            return Employee::orderby('First_Name', 'asc')->get();
        }else {
            return $a;
        }
    }

    public function create(EmployeeRequest $request){

        try {
          $employee = new Employee();

          $employee->idEmployee = $request->input('idEmployee');
          $employee->Employee_Number = $request->input('Employee_Number');

          if($request->input('Last_Name') == "" ){
            $employee->Last_Name = 'null';
        }else {
            $employee->Last_Name = $request->input('Last_Name');
        }

          if($request->input('First_Name') == "" ){
            $employee->First_Name = 'null';
        }else {
            $employee->First_Name = $request->input('First_Name');
        }
          $employee->SSN = $request->input('SSN');
          $employee->Pay_Rate = $request->input('Pay_Rate');
          $employee->PayRates_id = $request->input('PayRates_id');
          $employee->Vacation_Days = $request->input('Vacation_Days');
          $employee->Paid_To_Date = $request->input('Paid_To_Date');
          $employee->Paid_Last_Year = $request->input('Paid_Last_Year');
          $employee->save();
            return $employee;
        }catch(Throwable $err){
            return $err->getMessage();
        }

    }

    public function update($a, EmployeeRequest $request){
        try {
        $employee = Employee::find($a);
        if($employee){
            $employee->idEmployee = $request->input('idEmployee');
          $employee->Employee_Number = $request->input('Employee_Number');

          if($request->input('Last_Name') == "" ){
            $employee->Last_Name = 'null';
        }else {
            $employee->Last_Name = $request->input('Last_Name');
        }

          if($request->input('First_Name') == "" ){
            $employee->First_Name = 'null';
        }else {
            $employee->First_Name = $request->input('First_Name');
        }
          $employee->SSN = $request->input('SSN');
          $employee->Pay_Rate = $request->input('Pay_Rate');
          $employee->PayRates_id = $request->input('PayRates_id');
          $employee->Vacation_Days = $request->input('Vacation_Days');
          $employee->Paid_To_Date = $request->input('Paid_To_Date');
          $employee->Paid_Last_Year = $request->input('Paid_Last_Year');
          $employee->save();
            return $employee;
        }else {
            return 'Data not found';
        }
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }

    public function delete($a){
        try{
            $employee = Employee::find($a);
            if($employee){
                $employee->delete();
                return $employee;
            }else {
                return 'Data not found';
            }
        }catch(Throwable $err){
            return $err->getMessage();
        }
    }

    public function index(){
        return view('admin.shares.masterpage');
    }
    public function actionLogin(Request $request){
        $data = $request->all();
        if($data){
            return response()->json([
                'status'    => true,
                'mess'      => 'Đã login thành công!',
            ]);
        }else {
            return response()->json([
                'status'    => false,
                'mess'      => 'Tài khoản hoặc mật khẩu không đúng!',
            ]);
        }
    }

}
