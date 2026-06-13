<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VehicleType extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function vehicle() : HasMany {
        return $this -> hasMany(Vehicle::class);
    }
}
