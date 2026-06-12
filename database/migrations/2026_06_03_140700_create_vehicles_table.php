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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('brand',20);
            $table->string('model',20);
            $table->string('plate_number',20);
            $table->integer('year');
            $table->string('capcity');
            $table->string('owner');

            $table->foreignId("employee_id")->constrained("employees")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("vehicle_type_id")->constrained("vehicles")->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
