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
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects')->nullOnDelete();
            $table->string('finger_print_id', 30)->nullable();
            $table->string('id_number', 30)->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('birth_place', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('identity_number', 50)->nullable(); //KTP
            $table->text('address')->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->text('photo_path')->nullable();
            $table->string('hire_type', 50)->nullable(); //Tetap, Kontrak, Magang, Freelance
            $table->string('employee_status', 50)->nullable(); //Aktif, Nonaktif, Resign, Pensiun
            $table->string('division', 50)->nullable();
            $table->string('position', 100)->nullable();
            $table->date('join_date')->nullable();
            $table->date('contract_start_date')->nullable();
            $table->date('contract_end_date')->nullable();
            $table->date('resign_date')->nullable();
            $table->text('resign_reason')->nullable();
            $table->string('tax_type', 30)->nullable();
            $table->timestamps();
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
