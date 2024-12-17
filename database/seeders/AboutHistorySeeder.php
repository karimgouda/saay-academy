<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_histories')->insert([
            'title_1' => json_encode(['en' => 'Title 1', 'ar' => 'عنوان']),
            'description_1' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'title_2' => json_encode(['en' => 'Title 1', 'ar' => 'عنوان']),
            'description_2' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'title_3' => json_encode(['en' => 'Title 1', 'ar' => 'عنوان']),
            'description_3' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
        ]);
    }
}
