<?php
// config/uploadconfig.php
return [

    'disk' => 'public',        // default disk
    'base_path' => 'uploads',  // base folder
    'suffix' => 'seldom-tech',

    'models' => [

        App\Models\OurProject::class => [

            'featured_image' => [

                'type' => 'image',
                'multiple' => false,
                'path' => 'our-projects/featured',
                'allowed' => ['jpg', 'jpeg', 'png', 'webp'],
                'max_size' => 1024, // KB
                'quality' => 80,

                'items' => [
                    'original' => [
                        'width' => null,
                        'height' => null,
                    ],
                    'thumbnail' => [
                        'width' => 100,
                        'height' => 100,
                    ],
                ],
            ],

            'meta_image' => [
                'type' => 'image',
                'multiple' => false,
                'path' => 'our-projects/meta',
                'allowed' => ['jpg', 'jpeg', 'png', 'webp'],
                'max_size' => 512,
            ],

            'gallery' => [
                'type' => 'image',
                'multiple' => true,
                'path' => 'our-projects/gallery',
                'allowed' => ['jpg', 'jpeg', 'png', 'webp'],
                'max_size' => 2048,
            ],
        ],
    ],
];
