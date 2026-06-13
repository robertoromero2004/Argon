<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'card_id',
        'phone_number',
        'driver_licence',
        'nationality',
        'role',
        'hire_date',
        'education_level',
        'marital_state',
    ];

    public function vehicles() : Hasone {
        return $this -> hasOne(Vehicle::class);
    } 

    public function movement_report() : BelongsToMany {
        return $this -> belongsToMany(Movement_Report::class);
    }
}
