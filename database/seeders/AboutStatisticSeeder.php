<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 5; $i++) {
            DB::table('about_statistics')->insert([
                'title' => json_encode(['en' => 'Title ' . $i, 'ar' => 'عربي']),
                'description' => json_encode(['en' => 'Description ' . $i, 'ar' => 'وصف بالعربية']),
                'number' => json_encode(['en' => '999', 'ar' => '٩٩٩']),
            ]);
        }
    }
}
