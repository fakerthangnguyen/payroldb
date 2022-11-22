<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        'User_ID',
        'User_Name',
        'Password',
        'Email',
        'Active',
    ];
}
