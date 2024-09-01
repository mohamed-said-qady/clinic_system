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
        Schema::create('medical_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');

            $table->unsignedBigInteger('hospital_id')->references('id')->on('aospital')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id')->references('id')->on('acounts')->onDelete('cascade');
            $table->unsignedBigInteger('doctor_id')->references('id')->on('acounts')->onDelete('cascade');
          
            $table->boolean('completed')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_tests');
    }
};
