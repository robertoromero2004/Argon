<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    protected $fillable = [
        
    ];

    public function vehicles() : BelongsTo {
        return $this -> belongsTo(Vehicle::class);
    } 

    public function movement_report() : BelongsToMany {
        return $this -> belongsToMany(Movement_Report::class);
    }
}
