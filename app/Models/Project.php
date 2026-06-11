<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'full_description',
        'image',
        'live_url',
        'github_url',
        'order',
        'is_visible',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_visible' => 'boolean',
    ];

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'project_technologies', 'project_id', 'skill_id');
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function scopeFilterByTechnology($query, $technology = null)
    {
        if ($technology) {
            return $query->whereHas('technologies', function ($q) use ($technology) {
                $q->where('slug', $technology);
            });
        }
        return $query;
    }
}
