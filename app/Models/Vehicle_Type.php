<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vehicle_Type extends Model
{
    protected $fillable = [

    ];

    public function vehicle() : BelongsTo {
        return $this -> belongsTo(Vehicle::class);
    }
}
