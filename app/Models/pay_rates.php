<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay_rates extends Model
{
    use HasFactory;
    protected $table = 'pay_rates';
    protected $fillable = [
        'idPay_Rates',
        'Pay_Rate_Name',
        'Value',
        'Tax_Percentage',
        'Pay_Type',
        'Pay_Amount',
        'PT_Level_C',
    ];
}
