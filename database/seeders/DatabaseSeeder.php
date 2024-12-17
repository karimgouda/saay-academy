<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BannerSeeder::class,
            FeatureSeeder::class,
            CharacteristicSeeder::class,
            GoalSeeder::class,
            QualitySeeder::class,
            BuildSeeder::class,
            SkillSeeder::class,
            HomeCategorySeeder::class,
            PartnerSeeder::class,
            DiscussSeeder::class,
            WorkerSeeder::class,
            CompanySeeder::class,
            PromiseSeeder::class,
            LeaderSeeder::class,
            AboutSliderSeeder::class,
            AboutStatisticSeeder::class,
            AboutHistorySeeder::class,
            ServicesMenuSeeder::class,
            ServicesSolutionSeeder::class,
            ServicesTroubleSeeder::class,
            ServicesGallerySeeder::class,
            PrivacyPolicySeeder::class,
        ]);
    }
}
