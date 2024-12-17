<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            // 'home' => ['en' => ["WORLDWIDE LEADER OF CONSTRUCTION INDUSTRY","THE BEST CONSTRUCTIONS COMPANY SINCE 1895","OUR MISSION IS TO DEVELOP THE STRONGEST"], 'ar' => ["مهمتنا هي تطوير الأقوى","رائد عالمي في صناعة البناء والتشييد","أفضل شركة إنشاءات منذ عام 1895"]],
            'home' => ['en' => 'Home page', 'ar' => 'من نحن'],
            'about' => ['en' => 'About Us', 'ar' => 'من نحن'],
            'services' => ['en' => 'Services', 'ar' => 'الخدمات'],
            'contact_us' => ['en' => 'Contact Us', 'ar' => 'تواصل معنا'],
            'terms_&_conditions' => ['en' => 'TERMS & CONDITIONS', 'ar' => 'الشروط والأحكام'],
            'privacy_&_policy' => ['en' => 'PRIVACY POLICY', 'ar' => 'سياسة الخصوصية'],
        ];

        foreach ($pages as $page => $value) {
            
            $imagePath = ($page == 'home') ? 'initializing/home-langing.jpg' : 'initializing/placeholder-banner.jpg';

            DB::table('banners')->insert([
                'page_type' => $page,
                'title' => json_encode(['en' => $value['en'], 'ar' => $value['ar']]),
                'description' => json_encode(['en' => 'English Description', 'ar' => 'وصف بالعربية']),
                'image' => json_encode(['en' => $imagePath, 'ar' => $imagePath]),
            ]);
        }
    }
}
