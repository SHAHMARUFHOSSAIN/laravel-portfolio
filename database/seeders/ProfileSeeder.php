<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'John Doe',
            'title' => 'Full Stack Developer',
            'short_bio' => 'Passionate developer with expertise in building modern web applications using Laravel, React, and Vue.',
            'full_bio' => '<p>I am a passionate full-stack developer with over 5 years of experience in building modern web applications. I specialize in Laravel, React, and Vue.js, and I love creating beautiful, functional, and user-centered digital experiences.</p><p>With a strong foundation in both frontend and backend development, I bring ideas to life through clean, efficient, and scalable code. I am constantly learning new technologies and staying up-to-date with the latest industry trends.</p><p>When I\'m not coding, you can find me contributing to open-source projects, reading tech blogs, or enjoying a cup of coffee while brainstorming new project ideas.</p>',
            'email' => 'john.doe@example.com',
            'phone' => '+1 234 567 890',
            'location' => 'San Francisco, CA',
            'github_url' => 'https://github.com/johndoe',
            'linkedin_url' => 'https://linkedin.com/in/johndoe',
            'twitter_url' => 'https://twitter.com/johndoe',
            'is_visible' => true,
        ]);
    }
}
