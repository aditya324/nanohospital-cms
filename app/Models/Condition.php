<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Condition extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'cta_text',
        'cta_link',
        'about',
        'about_more',
        'overview',
        'symptoms',
        'causes',
        'risks',
        'diagnosis',
        'treatment',
        'recovery',
        'sort_order',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'symptoms' => 'array',
        'causes' => 'array',
        'risks' => 'array',
        'diagnosis' => 'array',
        'treatment' => 'array',
        'is_active' => 'boolean',
    ];

    protected static function booted()
    {
        static::saving(function ($condition) {
            if (!$condition->slug) {
                $condition->slug = Str::slug($condition->name);
            }
        });
    }
}
