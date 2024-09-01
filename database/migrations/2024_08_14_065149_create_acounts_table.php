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
        Schema::create('acounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->enum('description',['patient','doctor','admin','lab','chemist']);
            $table->unsignedBigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('specialisity_id')->references('id')->on('specialisities')->onDelete('cascade');
            $table->boolean('archieved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acounts');
    }
};
