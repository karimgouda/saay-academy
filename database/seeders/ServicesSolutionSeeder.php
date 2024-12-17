<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesSolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 5; $i++) {
            DB::table('services_solutions')->insert([
                'title' => json_encode(['en' => 'Title' . $i, 'ar' => 'عربي']),
                'description' => json_encode(['en' => 'Our team of experts in the areas of architecture, engineering, management and construction bring you the insight and advice you need for your project.', 'ar' => 'عليك أن تعمل بجد للحصول على بعض الفوائد منه. لا تغضب من الألم في التوبيخ في اللذة لأنه يريد أن يكون شعرة من الألم على أمل ألا يكون هناك تكاثر.']),
                'icon' => 'im-home',
            ]);
        }
    }
}
