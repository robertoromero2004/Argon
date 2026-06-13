<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class MovementType extends Model
{
    protected $fillable = [
            'name',
            'description'
    ];

    public function movement() : HasMany {
        return $this -> hasMany(Movement::class);
    }
}
