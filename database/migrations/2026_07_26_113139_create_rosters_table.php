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
        Schema::create('rosters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable();
            $table->smallInteger('work_day')->nullable(); //Satuan hari. Misal roster 10 - 2. Berarti 10 minggu x 7 hari = 70 hari dengan off 2 minggu x 7 hari = 14 hari.
            $table->smallInteger('off_day')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
