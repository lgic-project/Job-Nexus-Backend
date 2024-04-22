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
        Schema::create('application_details', function (Blueprint $table) {
            $table->id();
            $table->string('application_title');
            $table->string('application_employer_name');
            $table->string('application_employee_name');
            $table->string('application_employee_address');
            $table->string('application_company_name');
            $table->string('application_slug');
            $table->longText('application_description');
            $table->longText('application_employee_image');
            $table->longText('application_employee_cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('application_details');
    }
};
