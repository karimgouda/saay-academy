<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services_menus')->insert([
            'key' => 'construction',
            'title' => json_encode(['en' => 'A FLEXIBLE SOLUTION FOR EVERYONE', 'ar' => 'أهداف الاستدامة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'sub_title' => json_encode(['en' => 'STATS & CHARTS', 'ar' => 'عربي']),
            'sub_description' => json_encode(['en' => 'They routinely work on massive projects in the United States and abroad. They completed Phase 1 of the Dulles Metrorail project, which was one of the largest infrastructure projects in the United States', 'ar' => 'عربي']),
            'progresses_titles' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع"]]),
            'progresses_percentages' => json_encode(['en' => ["70","90"], 'ar' => ["70","90"]]),
        ]);

        DB::table('services_menus')->insert([
            'key' => 'renovation',
            'title' => json_encode(['en' => 'WE BUILD THE PERFECT HOME FOR YOU', 'ar' => 'أهداف الاستدامة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'sub_title' => json_encode(['en' => 'STATS & CHARTS', 'ar' => 'عربي']),
            'sub_description' => json_encode(['en' => 'They routinely work on massive projects in the United States and abroad. They completed Phase 1 of the Dulles Metrorail project, which was one of the largest infrastructure projects in the United States', 'ar' => 'عربي']),
            'sub_title_2' => json_encode(['en' => 'STATS & CHARTS', 'ar' => 'عربي']),
            'sub_description_2' => json_encode(['en' => 'They routinely work on massive projects in the United States and abroad. They completed Phase 1 of the Dulles Metrorail project, which was one of the largest infrastructure projects in the United States', 'ar' => 'عربي']),
            'sub_title_3' => json_encode(['en' => 'STATS & CHARTS', 'ar' => 'عربي']),
            'sub_description_3' => json_encode(['en' => 'They routinely work on massive projects in the United States and abroad. They completed Phase 1 of the Dulles Metrorail project, which was one of the largest infrastructure projects in the United States', 'ar' => 'عربي']),
        ]);

        DB::table('services_menus')->insert([
            'key' => 'consulting',
            'title' => json_encode(['en' => 'WE ARE GREEN ORIENTED', 'ar' => 'أهداف الاستدامة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'progresses_titles' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", "Fourth title"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر","عربي"]]),
            'progresses_percentages' => json_encode(['en' => ["70","90","40","60"], 'ar' => ["70","90","40","60"]]),
        ]);

        DB::table('services_menus')->insert([
            'key' => 'interior',
            'title' => json_encode(['en' => 'OTHER SERVICES', 'ar' => 'أهداف الاستدامة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'image_2' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'image_3' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'video' => 'https://www.youtube.com/embed/MLpWrANjFbI',
        ]);
    }
}
