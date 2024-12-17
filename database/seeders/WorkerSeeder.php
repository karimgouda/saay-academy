<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workers')->insert([
            'name' => json_encode(['en' => 'Name 1', 'ar' => 'عربي']),
            'profession' => json_encode(['en' => 'English profession', 'ar' => 'مهنة بالعربية']),
            'description' => json_encode(['en' => 'English Description', 'ar' => 'وصف بالعربية']),
            'image' => 'initializing/placeholder-image.png',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'linkedin' => 'https://linkedin.com',
        ]);

        DB::table('workers')->insert([
            'name' => json_encode(['en' => 'Name 2', 'ar' => ' 2عربي']),
            'profession' => json_encode(['en' => 'English profession', 'ar' => 'مهنة بالعربية']),
            'description' => json_encode(['en' => 'English Description', 'ar' => 'وصف بالعربية']),
            'image' => 'initializing/placeholder-image.png',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'linkedin' => 'https://linkedin.com',
        ]);

        DB::table('workers')->insert([
            'name' => json_encode(['en' => 'Name 3', 'ar' => ' 3عربي']),
            'profession' => json_encode(['en' => 'English profession', 'ar' => 'مهنة بالعربية']),
            'description' => json_encode(['en' => 'English Description', 'ar' => 'وصف بالعربية']),
            'image' => 'initializing/placeholder-image.png',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'linkedin' => 'https://linkedin.com',
        ]);

        DB::table('workers')->insert([
            'name' => json_encode(['en' => 'Name 4', 'ar' => ' 4عربي']),
            'profession' => json_encode(['en' => 'English profession', 'ar' => 'مهنة بالعربية']),
            'description' => json_encode(['en' => 'English Description', 'ar' => 'وصف بالعربية']),
            'image' => 'initializing/placeholder-image.png',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'linkedin' => 'https://linkedin.com',
        ]);
    }
}
