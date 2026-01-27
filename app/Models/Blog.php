<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'featured_image',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'content_blocks',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'content_blocks' => 'array',
        'is_published'   => 'boolean',
        'published_at'   => 'datetime',
    ];
}
