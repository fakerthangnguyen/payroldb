<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa toàn bộ dữ liệu ở table Chuyên Mục
        DB::table('products')->delete();
        // Muốn id được đánh số lại từ 1
        DB::table('products')->truncate();

        DB::table('products')->insert([
            ['ten_san_pham' => 'Bàn gỗ', 'slug_san_pham' => 'ban-go','hinh_anh' => 'https://gomottam.com/wp-content/uploads/2021/03/ban-an-go-lim.jpg', 'mo_ta_ngan' => 'bàn đẹp', 'mo_ta_chi_tiet' => 'bàn quá đẹp','so_luong' => '1','is_open' => '1', 'gia_ban' => '1000', 'gia_khuyen_mai' => '200','id_loai_san_pham'=> '1'],
            ['ten_san_pham' => 'Ghế gỗ', 'slug_san_pham' => 'ghe-go','hinh_anh' => 'https://noithatdogoviet.com/upload/sanpham/ghe-day-nam-thu-gian-go-cam-xe-la-lon.jpg', 'mo_ta_ngan' => 'ghế đẹp', 'mo_ta_chi_tiet' => 'ghế quá đẹp','so_luong' => '1','is_open' => '1','gia_ban' => '1000', 'gia_khuyen_mai' => '200','id_loai_san_pham'=> '1'],
        ]);
    }
}
