<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHangModel extends Model
{
    use HasFactory;
    protected $table = 'khach_hangs';
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone_number',
        'ip',
        'hash_reset',
       'is_block',
    ];
}
