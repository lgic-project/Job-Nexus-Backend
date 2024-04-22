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
        //
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->string('employee_email');
            $table->string('employee_password');
            $table->string('employee_first_name');
            $table->string('employee_middle_name')->nullable();
            $table->string('employee_last_name');
            $table->string('employee_address');
            $table->string('employee_slug');
            $table->string('employee_status');
            $table->string('employee_contact');
            $table->longText('employee_image');
            $table->longText('employee_description');
            $table->longText('employee_cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('employee_details');
    }
};
