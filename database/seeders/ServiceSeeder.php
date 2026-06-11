<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'title' => 'Web Development',
            'slug' => 'web-development',
            'description' => 'Custom web applications built with modern technologies. From concept to deployment.',
            'icon' => 'heroicon-o-code',
            'features' => [
                ['key' => 'Custom Web Applications', 'value' => 'Tailored solutions for your unique needs'],
                ['key' => 'Responsive Design', 'value' => 'Mobile-first approach for all devices'],
                ['key' => 'Performance Optimization', 'value' => 'Fast loading and smooth interactions'],
            ],
            'order' => 1,
            'is_visible' => true,
        ]);

        Service::create([
            'title' => 'Backend Development',
            'slug' => 'backend-development',
            'description' => 'Robust backend systems with clean architecture and scalable solutions.',
            'icon' => 'heroicon-o-server',
            'features' => [
                ['key' => 'API Development', 'value' => 'RESTful and GraphQL APIs'],
                ['key' => 'Database Design', 'value' => 'Optimized schema and queries'],
                ['key' => 'Authentication', 'value' => 'Secure user management systems'],
            ],
            'order' => 2,
            'is_visible' => true,
        ]);

        Service::create([
            'title' => 'UI/UX Design',
            'slug' => 'ui-ux-design',
            'description' => 'Beautiful and intuitive user interfaces that enhance user experience.',
            'icon' => 'heroicon-o-paint-brush',
            'features' => [
                ['key' => 'User Research', 'value' => 'Understanding user needs and behaviors'],
                ['key' => 'Wireframing', 'value' => 'Detailed planning and prototyping'],
                ['key' => 'Visual Design', 'value' => 'Stunning and consistent design systems'],
            ],
            'order' => 3,
            'is_visible' => true,
        ]);

        Service::create([
            'title' => 'Technical Consulting',
            'slug' => 'technical-consulting',
            'description' => 'Expert advice on technology choices and architecture decisions.',
            'icon' => 'heroicon-o-lightning-bolt',
            'features' => [
                ['key' => 'Code Review', 'value' => 'Thorough analysis of existing code'],
                ['key' => 'Performance Audit', 'value' => 'Identifying and fixing bottlenecks'],
                ['key' => 'Architecture Planning', 'value' => 'Scalable and maintainable solutions'],
            ],
            'order' => 4,
            'is_visible' => true,
        ]);
    }
}
