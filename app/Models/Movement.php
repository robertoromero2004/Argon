<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movement extends Model
{
    protected $fillable = [
        'name',
        'date', 
        'time',
        'quantity',
        'status', 
    ];

    public function movement_report() : BelongsToMany {
        return $this -> belongsToMany(Movement_Report::class);
    }


    public function movement_type() : belongsTo {
        return $this -> belongsTo(Movement_Type::class);
    }

    public function product() : HasMany {
        return $this -> hasMany(Product::class);
    }
}
