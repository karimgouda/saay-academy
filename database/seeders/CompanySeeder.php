<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 4; $i++) {
            DB::table('companies')->insert([
                'name' => json_encode(['en' => 'Company' . $i, 'ar' => 'عربي ' . $i]),
                'link' => '#',
            ]);
        }
    }
}
