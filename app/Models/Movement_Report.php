<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Movement_Report extends Model
{
    protected $fillable = [

    ];

    public function employee() : BelongsToMany {
        return $this -> belongsToMany(Employee::class);
    }

    public function movement() : HasOne {
        return $this -> hasOne(Movement::class);
    }
}
