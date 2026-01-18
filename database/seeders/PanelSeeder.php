<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //add panels
        DB::table('panels')->insertOrIgnore([
            ['name' => 'Admin', 'slug' => 'admin'],
            ['name' => 'Client', 'slug' => 'client'],
        ]);
        
    }
}
