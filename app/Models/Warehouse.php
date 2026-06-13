<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends Model
{
    protected $fillable = [
        'name',
        'current_product_stock',
        'capacity',
        'availability',
        'manager_name',
        'location',
        'capacity'
    ];

    public function supplier() : belongsToMany{
        return $this -> belongsToMany (Supplier::class);
    }

    public function product() : HasMany {
        return $this -> hasMany (Product::class);
    }
}
