<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movement extends Model
{
    protected $fillable = [

    ];

    public function movement_report() : BelongsToMany {
        return $this -> belongsToMany(Movement_Report::class);
    }


    public function movement_type() : HasMany {
        return $this -> hasMany(Movement_Type::class);
    }

    public function product() : HasMany {
        return $this -> hasMany(Product::class);
    }
}
