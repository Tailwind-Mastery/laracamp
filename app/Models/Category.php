<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }

    public function group(): HasMany
    {
        return $this->hasMany(Group::class);
    }

    public function fiveProducts(): HasMany
    {
        return $this->hasMany(Product::class)->limit(5);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
