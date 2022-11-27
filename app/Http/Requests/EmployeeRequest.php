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
           'Vacation_Days' => 'nullable',
           'First_Name'    => 'nullable'
        ];
    }
}