<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'url',
        'type',
        'date',
        'sort_order',
        'is_visible',
    ];

    protected $casts = [
        'date' => 'date',
        'sort_order' => 'integer',
        'is_visible' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (Post $post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->title);
            }
        });

        static::updating(function (Post $post) {
            if ($post->isDirty('title') && !$post->isDirty('slug')) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function scopeBlogs($query)
    {
        return $query->where('type', 'blog');
    }

    public function scopeAwards($query)
    {
        return $query->where('type', 'award');
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('date', 'desc');
    }
}
