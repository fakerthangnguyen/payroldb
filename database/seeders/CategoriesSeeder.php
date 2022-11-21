<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa toàn bộ dữ liệu ở table Chuyên Mục
        DB::table('categories')->delete();
        // Muốn id được đánh số lại từ 1
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            ['ten_loai_san_pham' => 'Bàn', 'slug_loai_san_pham' => 'ban', 'is_open' => '1', 'id_loai_san_pham_cha' => '1'],
            ['ten_loai_san_pham' => 'Ghế', 'slug_loai_san_pham' => 'ghe', 'is_open' => '1', 'id_loai_san_pham_cha' => '1'],

        ]);
    }
}
