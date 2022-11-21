<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Xóa toàn bộ dữ liệu ở table Chuyên Mục
        DB::table('khach_hangs')->delete();
        // Muốn id được đánh số lại từ 1
        DB::table('khach_hangs')->truncate();

        DB::table('khach_hangs')->insert([
            ['full_name' => 'Châu', 'email' => 'chau@gmail.com', 'password' => '123', 'phone_number' => '1123213123', 'ip' => '1'],
            ['full_name' => 'Thắng', 'email' => 'ff@gmail.com', 'password' => '123', 'phone_number' => '1123213123', 'ip' => '1'],
            ['full_name' => 'Thành', 'email' => 'ff@gmail.com', 'password' => '123', 'phone_number' => '1123213123', 'ip' => '1'],
            ['full_name' => 'chóp', 'email' => 'ff@gmail.com', 'password' => '123', 'phone_number' => '1123213123', 'ip' => '1'],
        ]);
    }
    }

