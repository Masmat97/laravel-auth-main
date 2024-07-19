<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
  /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'Front-end', 'description' => 'Front-end development', 'icon' => 'frontend-icon.png'],
            ['name' => 'Back-end', 'description' => 'Back-end development', 'icon' => 'backend-icon.png'],
            ['name' => 'Full stack', 'description' => 'Full stack development', 'icon' => 'fullstack-icon.png'],
            ['name' => 'Design', 'description' => 'Design work', 'icon' => 'design-icon.png'],
        ]);
    }
}
