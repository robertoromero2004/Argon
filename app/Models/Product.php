<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'expiry_date',
        'unit_of_measure',
        'quantity',
        'material',
        'current_stock_quantity',
        'minimum_stock_quantity',
    ];

    public function movement() : BelongsTo {
        return $this -> belongsTo(Movement::class);
    }

    public function warehouse() : BelongsTo {
        return $this -> belongsTo(Warehouse::class);
    }

    public function product_type() : BelongsTo {
        return $this -> belongsTo(Product_Type::class);
    }
}
