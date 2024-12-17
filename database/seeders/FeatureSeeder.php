<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            'title' => json_encode(['en' => 'EXPERIENCED TEAM', 'ar' => 'فريق من ذوي الخبرة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project.', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
        ]);

        DB::table('features')->insert([
            'title' => json_encode(['en' => 'MODERN EQUIPMENT', 'ar' => 'معدات حديثة']),
            'description' => json_encode(['en' => 'The procedures and techniques that are used during the building process. We always focused on using modern methods of construction and repair.', 'ar' => 'تشير المعدات الثقيلة إلى مركبات الخدمة الشاقة ، المصممة خصيصًا لتنفيذ مهام البناء ، وغالبًا ما تتضمن عمليات الحفر.']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
        ]);

        DB::table('features')->insert([
            'title' => json_encode(['en' => 'SMART METHODS', 'ar' => 'طرق ذكية']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project.', 'ar' => 'الإجراءات والتقنيات التي يتم استخدامها أثناء عملية البناء. ركزنا دائمًا على استخدام الأساليب الحديثة في البناء والإصلاح.']),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
        ]);
    }
}
