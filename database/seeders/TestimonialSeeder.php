<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::create([
            'name' => 'Sarah Johnson',
            'position' => 'CTO',
            'company' => 'TechStart Inc.',
            'content' => 'Working with John was an absolute pleasure. His attention to detail and technical expertise helped us launch our product ahead of schedule. Highly recommended!',
            'rating' => 5,
            'is_visible' => true,
        ]);

        Testimonial::create([
            'name' => 'Michael Chen',
            'position' => 'Product Manager',
            'company' => 'Innovate Labs',
            'content' => 'John delivered exceptional work on our e-commerce platform. His understanding of both frontend and backend technologies made the entire process seamless.',
            'rating' => 5,
            'is_visible' => true,
        ]);

        Testimonial::create([
            'name' => 'Emily Rodriguez',
            'position' => 'Founder',
            'company' => 'Design Studio',
            'content' => 'Professional, reliable, and incredibly talented. John transformed our vision into a beautiful reality. We continue to work with him on new projects.',
            'rating' => 5,
            'is_visible' => true,
        ]);

        Testimonial::create([
            'name' => 'David Kim',
            'position' => 'VP Engineering',
            'company' => 'ScaleUp',
            'content' => 'The code quality and architectural decisions were outstanding. John is a true professional who understands business needs and delivers accordingly.',
            'rating' => 5,
            'is_visible' => true,
        ]);
    }
}
