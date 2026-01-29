<?php

namespace Database\Seeders;

use App\Models\OurService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Custom Software', 'slug' => 'custom-software'],
            ['name' => 'Websites & Apps', 'slug' => 'websites-apps'],
            ['name' => 'Branding & Design', 'slug' => 'branding-design'],
            ['name' => 'Growth Marketing', 'slug' => 'growth-marketing'],

        ];
        OurService::insert($services);
    }
}
