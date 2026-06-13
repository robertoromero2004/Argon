<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PhpParser\Builder\Function_;

class Vehicle extends Model
{
    protected $fillable = [
        'license_plate',
        'brand',
        'model',
        'color',
        'year',
        'owner',
    ];

    public Function employee() : belongsTo {
        return $this -> belongsTo(Employee::class);
    }

    public function vehicle_type() : belongsTo {
        return $this -> belongsTo (VehicleType::class);
    }

}
