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
        Schema::create('office_schedule_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_schedule_id')->nullable()->constrained('office_schedules')->nullOnDelete();
            $table->integer('day_of_week')->nullable();
            $table->boolean('is_workday')->nullable();
            $table->time('check_in')->nullable();
            $table->time('check_out')->nullable();
            $table->time('break_in')->nullable();
            $table->time('break_out')->nullable();
            $table->integer('late_tolerance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_schedule_details');
    }
};
