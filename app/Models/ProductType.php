<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function product() : hasMany {
        return $this -> hasMany(Product::class);
    }
}
