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
            'Employee_Number' => 'required|numeric',
            'Vacation_Days' => 'required|numeric|min:0',
            'PayRates_id'  => 'required|numeric|min:1|max:5',
            'Pay_Rate' =>  'required',
            'Paid_To_Date' => 'required|numeric|min:1|max:9',
            'Paid_Last_Year'  => 'required|numeric|min:1|max:9',
        ];
    }

}
