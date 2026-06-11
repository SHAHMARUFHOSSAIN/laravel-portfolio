<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Create projects
        $project1 = Project::create([
            'title' => 'E-Commerce Platform',
            'slug' => 'ecommerce-platform',
            'description' => 'A full-featured e-commerce platform with product management, cart, checkout, and payment integration.',
            'full_description' => '<p>A comprehensive e-commerce solution built with Laravel and Vue.js.</p>',
            'live_url' => 'https://demo.com',
            'github_url' => 'https://github.com/demo',
            'order' => 1,
            'is_visible' => true,
        ]);

        $project2 = Project::create([
            'title' => 'Task Management App',
            'slug' => 'task-management',
            'description' => 'A collaborative task management application with real-time updates.',
            'full_description' => '<p>Built with Laravel and Livewire.</p>',
            'live_url' => 'https://demo.com',
            'github_url' => 'https://github.com/demo',
            'order' => 2,
            'is_visible' => true,
        ]);

        $project3 = Project::create([
            'title' => 'Portfolio CMS',
            'slug' => 'portfolio-cms',
            'description' => 'A customizable portfolio content management system.',
            'full_description' => '<p>A modern portfolio CMS built with Filament.</p>',
            'live_url' => 'https://demo.com',
            'github_url' => 'https://github.com/demo',
            'order' => 3,
            'is_visible' => true,
        ]);

        // Get skills by name
        $skills = Skill::pluck('id', 'name')->toArray();

        // Attach to project 1: Laravel, Vue.js, MySQL
        $p1Techs = [];
        if (isset($skills['Laravel'])) $p1Techs[] = $skills['Laravel'];
        if (isset($skills['Vue.js'])) $p1Techs[] = $skills['Vue.js'];
        if (isset($skills['MySQL'])) $p1Techs[] = $skills['MySQL'];
        if (!empty($p1Techs)) $project1->technologies()->sync($p1Techs);

        // Attach to project 2: Laravel, Livewire
        $p2Techs = [];
        if (isset($skills['Laravel'])) $p2Techs[] = $skills['Laravel'];
        if (isset($skills['Livewire'])) $p2Techs[] = $skills['Livewire'];
        if (!empty($p2Techs)) $project2->technologies()->sync($p2Techs);

        // Attach to project 3: Laravel, Filament
        $p3Techs = [];
        if (isset($skills['Laravel'])) $p3Techs[] = $skills['Laravel'];
        if (!empty($p3Techs)) $project3->technologies()->sync($p3Techs);

        echo "Projects seeded with technologies!\n";
    }
}