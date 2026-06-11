<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'title' => 'Building Scalable APIs with Laravel',
                'slug' => 'building-scalable-apis-with-laravel',
                'content' => "Laravel provides an elegant syntax and powerful tools for building REST APIs. In this post, I'll walk through the essential components:\n\n## Request Validation\nUsing Form Requests to keep validation logic clean and reusable.\n\n## API Resources\nTransforming Eloquent models into JSON responses with resource classes.\n\n## Rate Limiting\nProtecting your API from abuse with Laravel's built-in throttle middleware.\n\n## Authentication\nImplementing token-based authentication with Sanctum for SPA and mobile clients.\n\nThese patterns have helped me ship reliable, maintainable APIs for production applications serving millions of requests daily.",
                'type' => 'blog',
                'date' => '2025-12-15',
                'url' => 'https://example.com/blog/laravel-apis',
                'sort_order' => 1,
            ],
            [
                'title' => 'Why Vue.js is My Go-To Frontend Framework',
                'slug' => 'why-vuejs-is-my-go-to-frontend-framework',
                'content' => "After building dozens of frontend applications, Vue.js remains my framework of choice. Here's why:\n\n## Developer Experience\nVue's single-file components make it intuitive to colocate template, script, and styles.\n\n## Reactivity System\nThe ref() and reactive() APIs provide fine-grained reactivity without a virtual DOM diff overhead.\n\n## Ecosystem\nPinia for state management, Vue Router for navigation, and Vite for blazing-fast builds.\n\n## Community\nA welcoming community and comprehensive documentation make onboarding seamless.\n\nWhether you're building a simple landing page or a complex dashboard, Vue scales beautifully with your needs.",
                'type' => 'blog',
                'date' => '2025-11-20',
                'url' => 'https://example.com/blog/vuejs',
                'sort_order' => 2,
            ],
            [
                'title' => 'Best Practices for Database Design',
                'slug' => 'best-practices-for-database-design',
                'content' => "Good database design is the foundation of any performant application. Here are principles I follow:\n\n## Normalization\nApply normalization (3NF) to eliminate data redundancy while balancing query performance.\n\n## Indexing Strategy\nCreate indexes on columns used in WHERE, JOIN, and ORDER BY clauses. Use composite indexes for multi-column queries.\n\n## Naming Conventions\nUse snake_case for table and column names. Be consistent: `users`, `posts`, `post_user` for pivot tables.\n\n## Migrations\nVersion-control your database schema. Every change should be reversible.\n\n## Query Optimization\nUse EXPLAIN to analyze slow queries. Eager load relationships to avoid N+1 problems.\n\nFollowing these practices has helped me build databases that scale gracefully from hundreds to millions of records.",
                'type' => 'blog',
                'date' => '2025-10-10',
                'url' => 'https://example.com/blog/database-design',
                'sort_order' => 3,
            ],
            [
                'title' => 'Best Developer of the Year',
                'slug' => 'best-developer-of-the-year',
                'content' => 'Recognized as the Best Developer of 2025 for outstanding contributions to open-source projects and community leadership. This award reflects a year of dedicated work building tools that empower other developers and contributing to the Laravel ecosystem.',
                'type' => 'award',
                'date' => '2025-12-01',
                'url' => 'https://example.com/awards/best-dev',
                'sort_order' => 4,
            ],
            [
                'title' => 'Innovation in Web Technology Award',
                'slug' => 'innovation-in-web-technology-award',
                'content' => 'Awarded for pioneering work in modern web application architectures and performance optimization techniques. The recognition highlights contributions to server-side rendering patterns and edge caching strategies that reduced load times by 60%.',
                'type' => 'award',
                'date' => '2025-09-15',
                'url' => 'https://example.com/awards/innovation',
                'sort_order' => 5,
            ],
            [
                'title' => 'Open Source Contributor Award',
                'slug' => 'open-source-contributor-award',
                'content' => 'Honored for consistent contributions to the Laravel ecosystem and community-driven open-source projects. Over 200 pull requests merged across various packages, with a focus on improving developer tooling and documentation.',
                'type' => 'award',
                'date' => '2025-06-20',
                'url' => 'https://example.com/awards/opensource',
                'sort_order' => 6,
            ],
        ];

        foreach ($items as $item) {
            Post::create($item);
        }
    }
}
