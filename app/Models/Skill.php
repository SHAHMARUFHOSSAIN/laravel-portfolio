<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'percentage',
        'icon',
        'category',
        'order',
        'is_visible',
    ];

    protected $casts = [
        'percentage' => 'integer',
        'order' => 'integer',
        'is_visible' => 'boolean',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
