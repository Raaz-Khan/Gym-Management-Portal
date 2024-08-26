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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id('Trainer_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->string('phone');
            $table->string('gender');
            $table->integer('fee');
            $table->string('speciality');
            $table->string('status')->default("Available");
            $table->text('address');
            $table->time('start_timing');
            $table->time('end_timing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
