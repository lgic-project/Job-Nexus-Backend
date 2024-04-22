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
        Schema::create('employer_details', function (Blueprint $table) {
            $table->id();
            $table->string('employer_email');
            $table->string('employer_password');
            $table->string('employer_first_name');
            $table->string('employer_middle_name')->nullable();
            $table->string('employer_last_name');
            $table->string('employer_address');
            $table->string('employer_slug');
            $table->string('employer_status');
            $table->string('employer_contact');
            $table->string('employer_company_name');
            $table->longText('employer_image');
            $table->longText('employer_description');
            $table->longText('employer_certificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('employer_details');
    }
};
