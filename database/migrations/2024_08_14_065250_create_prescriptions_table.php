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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medication');
            $table->string('instruction');
            $table->boolean('active')->default(1);
            $table->string('diagonsis');
            $table->integer('medicine_potency');
            $table->string('remarks');
            $table->string('lab_test');
            $table->string('prescription_delivered');
            $table->string('lab_requests_performed');


            $table->unsignedBigInteger('acount_id')->references('id')->on('acounts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
