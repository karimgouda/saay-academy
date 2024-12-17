<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leaders')->insert([
            'title' => json_encode(['en' => 'WE ARE THE LEADER', 'ar' => 'لنبني معًا']),
            'sub_title' => json_encode(['en' => 'IN INDUSTRIAL BUSINESS', 'ar' => 'لنبني معًا']),
            'description' => json_encode(['en' => 'Leading companies usually have several advantages, such as pricing power, brand recognition and a loyal customer base. It takes time to achieve a dominant position in an industry, and maintaining that leadership position is an ongoing effort. Small businesses should first aspire to lead their respective local markets before planning for worldwide industry domination.', 'ar' => 'عليك أن تعمل بجد للحصول على بعض الفوائد منه. لا تغضب من الألم في التوبيخ في اللذة لأنه يريد أن يكون شعرة من الألم على أمل ألا يكون هناك تكاثر.']),
            'name' => json_encode(['en' => 'MR. ABDULLAH AL-MAKHLAFI', 'ar' => ' عربي ']),
            'position' => json_encode(['en' => 'CEO OF THE COMPANY', 'ar' => ' عربي ']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'video_image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'gif_image' => json_encode(['en' => 'initializing/placeholder-image.gif', 'ar' => 'initializing/placeholder-image.gif']),
            'video_link' => 'https://www.youtube.com/embed/MLpWrANjFbI',
        ]);
    }
}
