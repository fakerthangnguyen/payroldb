<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'User_ID';
    protected $table = "users";
    protected $fillable = [
        'User_ID',
        'User_Name',
        'Password',
        'Email',
        'Active',
    ];
}
