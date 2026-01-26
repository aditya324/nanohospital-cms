<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageSection extends Model
{

    protected $fillable = ['health_package_id', 'title', 'subtitle', 'sort_order'];
    public function package()
    {
        return $this->belongsTo(HealthPackage::class, 'health_package_id');
    }

    public function tests()
    {
        return $this->hasMany(PackageTest::class);
    }
}
