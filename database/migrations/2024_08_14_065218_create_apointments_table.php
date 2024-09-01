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
        Schema::create('apointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('status')->default('active');
            $table->string('appointmentType')->default('offline');

            $table->unsignedBigInteger('doctor_id')->references('id')->on('acountss')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id')->references('id')->on('acounts')->onDelete('cascade');
            $table->unsignedBigInteger('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apointments');
    }
};
