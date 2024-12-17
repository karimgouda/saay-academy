<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('qualities')->insert([
            'title' => json_encode(['en' => 'SUSTAINABILITY GOALS', 'ar' => 'أهداف الاستدامة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'points' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]]),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
        ]);
    }
}
