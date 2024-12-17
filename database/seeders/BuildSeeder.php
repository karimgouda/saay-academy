<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('builds')->insert([
            'title' => json_encode(['en' => 'LET BUILD TOGETHER', 'ar' => 'لنبني معًا']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project.', 'ar' => 'عليك أن تعمل بجد للحصول على بعض الفوائد منه. لا تغضب من الألم في التوبيخ في اللذة لأنه يريد أن يكون شعرة من الألم على أمل ألا يكون هناك تكاثر.']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'icon_1' => 'im-structure',
            'number_1' => '765787',
            'description_1' => json_encode(['en' => 'SQUARE METERS BUILT', 'ar' => 'متر مربع بنيت']),
            'icon_2' => 'fa im-worker',
            'number_2' => '873652',
            'description_2' => json_encode(['en' => 'WORKED WITH US', 'ar' => 'عملت معنا']),
            'button_icon' => 'fa im-worker',
        ]);
    }
}
