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
            ['name' => 'Custom Software', 'slug' => 'custom-software',
            'description'=>'We specialize in creating custom software solutions that meet your specific needs.'
            ],
            ['name' => 'Websites & Apps', 'slug' => 'websites-apps', 'description'=>'We design, develop, and deliver custom websites and web applications tailored to our clients.'],
            ['name' => 'Branding & Design', 'slug' => 'branding-design',
            'description'=>'We specialize in creating business and website UI/UX design, and any graphic content.'
            ],
            ['name' => 'Growth Marketing', 'slug' => 'growth-marketing',
                'description'=>'Growth Marketing means digital marketing, such as Facebook, Google Ads, and SEO. It helps you reach more customers and increase your online presence.'
            ],

        ];
        OurService::insert($services);
    }
}
