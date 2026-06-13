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
        Schema::create('employee_movement_report', function (Blueprint $table) {
        
            $table->foreignId("employee_id")->constrained("employees")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId("movement_report_id")->constrained("movements_reports")->cascadeOnUpdate()->cascadeOnDelete();

            $table->primary(["employee_id", "movement_report_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_movement_report');
    }
};
