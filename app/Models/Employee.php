<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
       'Employee_Number',
       'idEmployee',
       'Last_Name',
       'First_Name',
       'SSN',
       'Pay_Rate',
       'PayRates_id',
       'Vacation_Days',
       'Paid_To_Date',
       'Paid_Last_Year',

    ];
}
