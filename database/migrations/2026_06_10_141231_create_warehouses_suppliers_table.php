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
        Schema::create('warehouses_suppliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("warehouse_id")->constrained("warehouses")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("supplier_id")->constrained("suppliers")->cascadeOnUpdate()->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses_suppliers');
    }
};
