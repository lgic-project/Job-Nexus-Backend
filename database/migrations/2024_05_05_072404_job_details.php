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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_category');
            $table->string('job_address');
            $table->string('job_company_name');
            $table->string('job_experience');
            $table->string('job_max_salary');
            $table->string('job_min_salary');
            $table->string('job_slug');
            $table->string('job_status');
            $table->string('job_contact');
            $table->string('job_validity');
            $table->string('job_type');
            $table->string('job_hour');
            $table->longText('job_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('job_details');
    }
};
