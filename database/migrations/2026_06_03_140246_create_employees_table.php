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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',50) ;
            $table->string('surname',50);
            $table->string('card_id',14) -> unique();
            $table->string('phone_number',8) ->unique();
            $table->string('driver_licence',14) ->unique();
            $table->enum('nationality',['Nicaraguan', 'Honduran', 'Cuban', 'Venezolan', 'Haitian']);
            $table->string('role',20);
            $table->date('hire_date');
            $table->string('education_level',25) -> nullable();
            $table->enum('marital_state',['single', 'married', 'divorced', 'widowed', 'common_law_relationship']);

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
