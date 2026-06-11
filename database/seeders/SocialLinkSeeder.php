<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        $links = [
            ['platform' => 'Twitter', 'url' => 'https://x.com', 'icon' => 'twitter', 'sort_order' => 1],
            ['platform' => 'GitHub', 'url' => 'https://github.com', 'icon' => 'github', 'sort_order' => 2],
            ['platform' => 'LinkedIn', 'url' => 'https://linkedin.com', 'icon' => 'linkedin', 'sort_order' => 3],
            ['platform' => 'Facebook', 'url' => 'https://facebook.com', 'icon' => 'facebook', 'sort_order' => 4],
            ['platform' => 'YouTube', 'url' => 'https://youtube.com', 'icon' => 'youtube', 'sort_order' => 5],
        ];

        foreach ($links as $link) {
            SocialLink::create($link);
        }
    }
}
