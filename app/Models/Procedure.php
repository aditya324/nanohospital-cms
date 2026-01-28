<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    //

    protected $fillable = [
        'title',
        'slug',
        'content',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'is_active',
    ];
}
