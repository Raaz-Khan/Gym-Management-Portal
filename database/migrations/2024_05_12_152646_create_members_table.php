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
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->float('weight');
            $table->string('plan');
            $table->string('goal');
            $table->string('status')->default("Active");
            $table->text('address');
            $table->time('start_timing')->nullable();
            $table->time('end_timing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
