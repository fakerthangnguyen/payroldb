<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillalbe = [
        'ten_loai_san_pham',
        'slug_loai_san_pham',
        'is_open',
        'id_loai_san_pham_cha',
    ];
}
