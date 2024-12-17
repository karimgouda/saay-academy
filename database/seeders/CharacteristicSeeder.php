<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characteristics')->insert([
            'title' => json_encode(['en' => 'Manufacturing', 'ar' => 'تصنيع']),
            'description' => json_encode(['en' => 'Speed, flexibility', 'ar' => 'وصف بالعربية']),
            'icon' => 'scaleX im-drill',
        ]);

        DB::table('characteristics')->insert([
            'title' => json_encode(['en' => 'Construction', 'ar' => 'بناء']),
            'description' => json_encode(['en' => 'Heavy performance', 'ar' => 'وصف بالعربية']),
            'icon' => 'scaleX  im-crane',
        ]);
        DB::table('characteristics')->insert([
            'title' => json_encode(['en' => 'Engineering', 'ar' => 'هندسة']),
            'description' => json_encode(['en' => 'Complex customer works', 'ar' => 'وصف بالعربية']),
            'icon' => 'scaleX  im-pencil-ruler',
        ]);
        DB::table('characteristics')->insert([
            'title' => json_encode(['en' => 'Energy', 'ar' => 'طاقة']),
            'description' => json_encode(['en' => 'Sun, oil and gas', 'ar' => 'وصف بالعربية']),
            'icon' => 'scaleX im-solar',
        ]);
    }
}
