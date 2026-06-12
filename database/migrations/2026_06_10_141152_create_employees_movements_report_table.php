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
        Schema::create('employees_movements_report', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("employee_id")->constrained("employees")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("movement_report_id")->constrained("movements_reports")->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_movements_report');
    }
};
