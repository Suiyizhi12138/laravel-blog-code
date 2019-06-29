<?php

return [
    'name' => "Eilan's Blog",
    'title' => "Eilan's Blog",
    'subtitle' => 'http://alian666.com',
    'description' => '博客源码来自laravel学院',
    'author' => 'Eilan',
    'page_image' => 'uploads/home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage',
    ],
    'contact_email' => env('MAIL_FROM_ADDRESS')
];