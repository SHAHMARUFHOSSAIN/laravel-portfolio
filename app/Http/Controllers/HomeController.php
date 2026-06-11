<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Experience;
use App\Models\SocialLink;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $projects = Project::with('technologies')->orderBy('order')->get();
        $skills = Skill::where('is_visible', true)->orderBy('order')->get();
        $experiences = Experience::where('is_visible', true)->orderBy('start_date', 'desc')->get();
        $services = Service::where('is_visible', true)->get();
        $testimonials = Testimonial::where('is_visible', true)->get();
        $socialLinks = SocialLink::visible()->ordered()->get();
        $posts = Post::visible()->latestFirst()->get();
        
        return view('home', compact(
            'profile',
            'projects',
            'skills',
            'experiences',
            'services',
            'testimonials',
            'socialLinks',
            'posts'
        ));
    }
}
