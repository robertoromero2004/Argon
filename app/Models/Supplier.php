<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'card_id',
        'phone_number',
        'driver_licence',
        'company_name',
        'nationality',
        'email_address',
        'physicall_address'
    ];

    public function warehouse() : BelongsToMany{
        return $this -> belongsToMany (Warehouse::class);
    }
}
