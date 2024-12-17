<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 5; $i++)
        {
            DB::table('about_sliders')->insert([
                'title' => json_encode(['en' => 'Title', 'ar' => 'عربي']),
                'country' => json_encode(['en' => 'country' . $i, 'ar' => 'مدينة']),
                'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project.', 'ar' => 'عليك أن تعمل بجد للحصول على بعض الفوائد منه. لا تغضب من الألم في التوبيخ في اللذة لأنه يريد أن يكون شعرة من الألم على أمل ألا يكون هناك تكاثر.']),
                'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            ]);
        }
    }
}
