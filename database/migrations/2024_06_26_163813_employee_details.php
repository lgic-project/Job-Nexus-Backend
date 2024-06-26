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
            $table->string('user_id');
            $table->string('employee_address');
            $table->string('employee_slug');
            $table->string('employee_status');
            $table->longText('employee_image');
            $table->longText('employee_cv')->nullable();
            $table->longText('employee_description');
            $table->longText('employee_education')->nullable();
            $table->longText('employee_work_experience')->nullable();
            $table->longText('employee_participation')->nullable();
            $table->longText('employee_training')->nullable();
            $table->string('employee_fb_link')->nullable();
            $table->string('employee_linkedin_link')->nullable();
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
