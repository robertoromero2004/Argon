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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name',50);
            $table->string('surname',50);
            $table->string('card_id',14);
            $table->string('phone_number',8);
            $table->string('company_name',25);
            $table->enum('nationality',['Nicaraguan', 'Honduran', 'Cuban', 'Venezolan', 'Haitian']);
            $table->string('email_address',30);
            $table->string('physicall_address',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
