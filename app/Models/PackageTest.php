<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageTest extends Model
{

    protected $fillable = ['package_section_id', 'test_name'];
    public function section()
    {
        return $this->belongsTo(PackageSection::class);
    }
}
