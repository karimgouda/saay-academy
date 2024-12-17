<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiscussSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discusses')->insert([
            'title' => json_encode(['en' => 'LET DISCUSS WITH US', 'ar' => 'لنتناقش معنا']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project.', 'ar' => 'عليك أن تعمل بجد للحصول على بعض الفوائد منه. لا تغضب من الألم في التوبيخ في اللذة لأنه يريد أن يكون شعرة من الألم على أمل ألا يكون هناك تكاثر.']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'icon_1' => 'im-money-2',
            'title_1' => json_encode(['en' => 'SQUARE METERS BUILT', 'ar' => 'إقتباس حر']),
            'description_1' => json_encode(['en' => 'SQUARE METERS BUILT', 'ar' => 'خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،']),
            'icon_2' => 'im-coins',
            'title_2' => json_encode(['en' => 'SQUARE METERS BUILT', 'ar' => 'مدفوعات سهلة']),
            'description_2' => json_encode(['en' => 'WORKED WITH US', 'ar' => 'خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،']),
            'button_icon' => 'fa im-speach-bubble8',
        ]);
    }
}
