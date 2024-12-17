<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('privacy_policies')->insert([
            'without_title' => true,
        ]);

        for($i = 1; $i < 5; $i++) {
            DB::table('privacy_policies')->insert([
                'title' => json_encode(['en' => 'Title' . $i, 'ar' => 'عربي']),
            ]);
        }
    }
}
