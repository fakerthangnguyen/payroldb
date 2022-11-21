<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'ten_san_pham',
        'slug_san_pham',
        'hinh_anh',
        'mo_ta_ngan',
        'mo_ta_chi_tiet',
        'so_luong',
        'is_open',
        'gia_ban',
        'gia_khuyen_mai',
        'id_loai_san_pham',
    ];
}
