<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'banner_image',
        'icon',
        'about_intro',
        'about_more',
        'overview_content',
        'treatments_content',
        'facilities_content',
        'conditions_content',
        'risks_content',
        'subspecialties_content',
        'meta_title',
        'meta_description',
        'is_active',
    ];


    public function faqs()
    {
        return $this->hasMany(SpecialityFaq::class)->orderBy('sort_order');
    }


    public function doctors()
    {
        return $this->hasMany(Doctor::class)->orderBy('name');
    }
}
