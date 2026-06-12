<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',50);
            $table->date('expiry_date');
            $table->string('unit_of_measure',6 );
            $table->string('quantity',12);
            $table->string('material');
            $table->string('current_stock_quantity',15);
            $table->string('minimun_allowed_quantity', 10);
            

            //? relationship
            $table->foreignId("product_type_id")->constrained("product_types")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("warehouse_id")->constrained("warehouses")->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
