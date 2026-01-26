<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthPackage extends Model
{


    protected $fillable = [
        'title',
        'name',
        'slug',
        'gender',
        'original_price',
        'discount_price',
        'image',
        'about_intro',
        'about_more',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function sections()
    {
        return $this->hasMany(PackageSection::class)->orderBy('sort_order');
    }
}
