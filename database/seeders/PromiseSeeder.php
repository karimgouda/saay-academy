<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 5; $i++) {
            DB::table('promises')->insert([
                'title' => json_encode(['en' => 'Promise title number' . $i, 'ar' => 'عربي ' . $i]),
            ]);
        }
    }
}
