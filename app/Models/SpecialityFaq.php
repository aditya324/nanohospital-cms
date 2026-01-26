<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialityFaq extends Model
{
    //
    protected $fillable = [
        'speciality_id',
        'question',
        'answer',
        'sort_order',
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
