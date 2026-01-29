<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Doctor extends Model
{

use Searchable;
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'qualification',
        'designation',
        'kmc_number',
        'location',
        'experience_years',
        'about',
        'speciality_id',
    ];

    protected static function booted()
    {
        static::saving(function ($doctor) {
            if (empty($doctor->slug)) {
                $doctor->slug = Str::slug($doctor->name);
            }
        });
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}