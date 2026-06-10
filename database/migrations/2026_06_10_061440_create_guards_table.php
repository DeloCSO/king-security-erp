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
        Schema::create('guards', function (Blueprint $table) {
            $table->id();

            $table->string('guard_code')->unique();

            // Personal Details
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('mobile', 15);
            $table->string('alternate_mobile', 15)->nullable();
            $table->string('email')->nullable();

            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();

            // Government IDs
            $table->string('aadhaar_number', 20)->nullable();
            $table->string('pan_number', 20)->nullable();

            // Labour Compliance
            $table->string('esi_number')->nullable();
            $table->string('epf_uan')->nullable();

            // Bank Details
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('ifsc_code')->nullable();

            // Salary Configuration
            $table->decimal('basic_salary', 12, 2)->default(0);
            $table->decimal('daily_wage', 12, 2)->default(0);

            // Address
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode', 10)->nullable();

            // Employment
            $table->date('joining_date')->nullable();
            $table->date('relieving_date')->nullable();

            $table->enum('employment_status', [
                'active',
                'inactive',
                'resigned',
                'terminated'
            ])->default('active');

            $table->string('photo')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guards');
    }
};