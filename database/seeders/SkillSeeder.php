<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name' => 'PHP', 'slug' => 'php', 'percentage' => 95, 'category' => 'backend', 'order' => 1],
            ['name' => 'Laravel', 'slug' => 'laravel', 'percentage' => 90, 'category' => 'backend', 'order' => 2],
            ['name' => 'JavaScript', 'slug' => 'javascript', 'percentage' => 90, 'category' => 'frontend', 'order' => 3],
            ['name' => 'React', 'slug' => 'react', 'percentage' => 85, 'category' => 'frontend', 'order' => 4],
            ['name' => 'Vue.js', 'slug' => 'vuejs', 'percentage' => 80, 'category' => 'frontend', 'order' => 5],
            ['name' => 'Tailwind CSS', 'slug' => 'tailwindcss', 'percentage' => 95, 'category' => 'frontend', 'order' => 6],
            ['name' => 'MySQL', 'slug' => 'mysql', 'percentage' => 85, 'category' => 'database', 'order' => 7],
            ['name' => 'PostgreSQL', 'slug' => 'postgresql', 'percentage' => 80, 'category' => 'database', 'order' => 8],
            ['name' => 'Docker', 'slug' => 'docker', 'percentage' => 75, 'category' => 'devops', 'order' => 9],
            ['name' => 'Git', 'slug' => 'git', 'percentage' => 90, 'category' => 'tool', 'order' => 10],
            ['name' => 'Livewire', 'slug' => 'livewire', 'percentage' => 85, 'category' => 'technology', 'order' => 11],
            ['name' => 'Filament', 'slug' => 'filament', 'percentage' => 80, 'category' => 'technology', 'order' => 12],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
