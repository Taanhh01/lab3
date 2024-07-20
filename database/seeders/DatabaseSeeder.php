<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Văn học Việt Nam'],
            ['name' => 'Lịch sử Việt Nam'],
            ['name' => 'Địa lý Việt Nam'],
            ['name' => 'Kinh tế Việt Nam'],
            ['name' => 'Chính trị Việt Nam'],
            ['name' => 'Pháp luật Việt Nam'],
            ['name' => 'Giáo dục Việt Nam'],
            ['name' => 'Nghệ thuật Việt Nam'],
            ['name' => 'Khoa học kỹ thuật Việt Nam'],
            ['name' => 'Văn hóa xã hội Việt Nam'],
        ]);
    }
}
