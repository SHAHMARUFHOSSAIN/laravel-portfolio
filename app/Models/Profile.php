<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'short_bio',
        'full_bio',
        'photo',
        'email',
        'phone',
        'location',
        'github_url',
        'facebook_url',
        'linkedin_url',
        'twitter_url',
        'resume_url',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];
}
