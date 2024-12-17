<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 3; $i++) {
            DB::table('partners')->insert([
                'image' => json_encode(['en' => 'initializing/placeholder-image.png', 'ar' => 'initializing/placeholder-image.png']),
            ]);
        }
    }
}
