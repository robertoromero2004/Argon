<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [

    ];

    public function movement() : BelongsTo {
        return $this -> belongsTo(Movement::class);
    }
}
