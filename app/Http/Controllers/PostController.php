<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Testimonial;

class PostController extends Controller
{
    public function show(string $slug)
    {
        $post = Post::where('slug', $slug)->visible()->firstOrFail();
        $recentPosts = Post::visible()->where('id', '!=', $post->id)->latestFirst()->take(3)->get();
        $profile = Profile::first();
        $testimonials = Testimonial::where('is_visible', true)->get();

        return view('post-detail', compact('post', 'recentPosts', 'profile', 'testimonials'));
    }
}
