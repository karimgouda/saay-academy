<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Buildings', 'ar' => 'أهداف الاستدامة']),
            'key' => 'buildings',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'progresses_titles' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST", "Fourth title"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر","عربي"]]),
            'progresses_percentages' => json_encode(['en' => ["70","90","40","60"], 'ar' => ["70","90","40","60"]]),
        ]);

        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Interiors', 'ar' => 'أهداف الاستدامة']),
            'key' => 'interiors',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'video' => 'https://www.youtube.com/embed/MLpWrANjFbI',
            'progresses_titles' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع"]]),
            'progresses_percentages' => json_encode(['en' => ["30","60"], 'ar' => ["30","60"]]),
        ]);

        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Homes', 'ar' => 'أهداف الاستدامة']),
            'key' => 'homes',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'video' => 'https://www.youtube.com/embed/MLpWrANjFbI',
            'progresses_titles' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع"]]),
            'progresses_percentages' => json_encode(['en' => ["50","90"], 'ar' => ["50","90"]]),
        ]);

        DB::table('home_categories')->insert([
            'title' => json_encode(['en' => 'Others', 'ar' => 'أهداف الاستدامة']),
            'key' => 'others',
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'video' => 'https://www.youtube.com/embed/MLpWrANjFbI',
            'progresses_titles' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع"]]),
            'progresses_percentages' => json_encode(['en' => ["90","40"], 'ar' => ["90","40"]]),
        ]);

    }
}
