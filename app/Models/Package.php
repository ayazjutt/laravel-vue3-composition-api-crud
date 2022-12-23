<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price_per_month', 'price_per_annum', 'is_popular', 'is_default'];

    public function features() {
        return $this->belongsToMany(Feature::class, 'package_features');
    }
}
