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
        Schema::create('supplier_warehouse', function (Blueprint $table) {

            $table->foreignId("warehouse_id")->constrained("warehouses")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("supplier_id")->constrained("suppliers")->cascadeOnUpdate()->cascadeOnDelete();

            $table->primary(["supplier_id", "warehouse_id"]);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_warehouse');
    }
};
