<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'title' => 'Senior Full Stack Developer',
            'company' => 'Tech Corp',
            'location' => 'San Francisco, CA',
            'start_date' => '2022-01-15',
            'end_date' => null,
            'is_current' => true,
            'description' => 'Leading development of enterprise web applications using Laravel and React. Managing a team of 5 developers and overseeing project architecture.',
            'technologies' => json_encode(['Laravel', 'React', 'AWS', 'TypeScript']),
            'is_visible' => true,
        ]);

        Experience::create([
            'title' => 'Full Stack Developer',
            'company' => 'StartupXYZ',
            'location' => 'Remote',
            'start_date' => '2020-06-01',
            'end_date' => '2021-12-31',
            'is_current' => false,
            'description' => 'Built and maintained multiple client projects using Laravel, Vue.js, and MySQL.',
            'technologies' => json_encode(['Laravel', 'Vue.js', 'MySQL', 'Docker']),
            'is_visible' => true,
        ]);

        Experience::create([
            'title' => 'Junior PHP Developer',
            'company' => 'Web Agency Inc.',
            'location' => 'Los Angeles, CA',
            'start_date' => '2018-09-01',
            'end_date' => '2020-05-31',
            'is_current' => false,
            'description' => 'Started my professional journey as a PHP developer working on WordPress and Laravel projects.',
            'technologies' => json_encode(['PHP', 'WordPress', 'Laravel', 'MySQL']),
            'is_visible' => true,
        ]);
    }
}