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
        Schema::create('movements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',50);
            $table->date('date');
            $table->time('time');
            $table->string('quantity');
            $table->enum('status',['pending','in progress', 'completed', 'cancelled', 'failed', 'on_hold', 'approved', 'reject']);


            //? relationships
            $table->foreignId("movement_type_id")->constrained("movement_types")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("product_id")->constrained("products")->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
