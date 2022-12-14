<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'idEmployee'   => 'required|exists:employee,idEmployee',
            'Employee_Number' => 'required|numeric',
            'Vacation_Days' => 'nullable|numeric|min:0',
            'PayRates_id'  => 'required|numeric|min:1|max:5',
            'Pay_Rate' =>  'nullable|numeric',
            'Paid_To_Date' => 'nullable|numeric|min:1|max:9',
            'Paid_Last_Year'  => 'nullable|numeric|min:1|max:9',
        ];
    }

}
