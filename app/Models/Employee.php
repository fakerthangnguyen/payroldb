<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idEmployee';
    protected $table = 'employee';
    protected $fillable = [
       'idEmployee',
       'Employee_Number',
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
