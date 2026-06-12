<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PhpParser\Builder\Function_;

class Vehicle extends Model
{
    protected $fillable = [

    ];

    public Function employee() : HasOne{
        return $this -> hasOne(Employee::class);
    }

    public function vehicle_type() : HasMany {
        return $this -> hasMany(Vehicle_Type::class);
    }

}
