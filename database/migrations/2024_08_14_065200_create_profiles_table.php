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
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('sex');
            $table->string('birthdate');
            $table->integer('phone');
            $table->string('allergies');
            $table->unsignedBigInteger('prefHospital')->references('id')->on('hospitals')->onDelete('cascade');
            $table->unsignedBigInteger('PrimaryCareDoctorId')->references('id')->on('acounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
