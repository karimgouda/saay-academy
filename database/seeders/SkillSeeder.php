<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            'title' => json_encode(['en' => 'LEADERSHIP', 'ar' => 'قيادة']),
            'sub_title' => json_encode(['en' => 'Purus expedita fusce temporibus est odit mi quoeliquid sempere', 'ar' => 'وصف بالعربية']),
            'description' => json_encode(['en' => 'Interdum iusto pulvinar consequuntur augue optio, repellat fuga! Purus expedita fusce temporibus est odit mi', 'ar' => 'جملة باللغة العربية']),
            'icon' => 'im-conference ',
        ]);

        DB::table('skills')->insert([
            'title' => json_encode(['en' => 'CORE VALUES', 'ar' => 'القيم الجوهرية']),
            'sub_title' => json_encode(['en' => 'Purus expedita fusce temporibus est odit mi quoeliquid sempere', 'ar' => 'وصف بالعربية']),
            'description' => json_encode(['en' => 'Interdum iusto pulvinar consequuntur augue optio, repellat fuga! Purus expedita fusce temporibus est odit mi', 'ar' => 'جملة باللغة العربية']),
            'icon' => 'im-medal ',
        ]);

        DB::table('skills')->insert([
            'title' => json_encode(['en' => 'VISION', 'ar' => 'رؤية']),
            'sub_title' => json_encode(['en' => 'Purus expedita fusce temporibus est odit mi quoeliquid sempere', 'ar' => 'وصف بالعربية']),
            'description' => json_encode(['en' => 'Interdum iusto pulvinar consequuntur augue optio, repellat fuga! Purus expedita fusce temporibus est odit mi', 'ar' => 'جملة باللغة العربية']),
            'icon' => 'im-flash-2',
        ]);
    }
}
