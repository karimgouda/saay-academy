<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\Point;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goals')->insert([
            'title' => json_encode(['en' => 'SUSTAINABILITY GOALS', 'ar' => 'أهداف الاستدامة']),
            'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project', 'ar' => 'يقدم لك فريق الخبراء لدينا في مجالات الهندسة المعمارية والهندسة والإدارة والبناء البصيرة والمشورة التي تحتاجها لمشروعك.', 'الصدقة الانسانية لدول العالم الرابع', 'المنتجات القابلة للفك من الصفر']),
            'points' => json_encode(['en' => ["Ecologic materials and oils","Human charity for fourth world countries","OUR MISSION IS TO DEVELOP THE STRONGEST"], 'ar' => ["المواد والزيوت البيئية","الصدقة الانسانية لدول العالم الرابع","المنتجات القابلة للفك من الصفر"]]),
            'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'image_2' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            'image_3' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
        ]);
        // $goal = Goal::first();

        // $points = [
        //     ['en' => 'Ecologic materials and oils', 'ar' => 'المواد والزيوت البيئية'],
        //     ['en' => 'Human charity for fourth world countries', 'ar' => 'الصدقة الانسانية لدول العالم الرابع'],
        //     ['en' => 'Renovable products from the scratch', 'ar' => 'المنتجات القابلة للفك من الصفر'],
        //     ['en' => 'State of art metal roofing', 'ar' => 'دولة من الفن تسقيف معدني'],
        //     ['en' => 'Human charity for fourth world countries', 'ar' => 'الصدقة الانسانية لدول العالم الرابع'],
        //     ['en' => 'Renovable products from the scratch', 'ar' => 'المنتجات القابلة للفك من الصفر'],
        // ];

        // foreach($points as $point) {
        //     $newPoint = new Point();
        //     $newPoint->setTranslation('title', 'en', $point['en']);
        //     $newPoint->setTranslation('title', 'ar', $point['ar']);

        //     $goal->points()->save($newPoint);
        // }
        
    }
}
