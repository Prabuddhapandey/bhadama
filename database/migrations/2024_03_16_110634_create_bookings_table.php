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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('pickup');
            $table->string('destination');
          
            $table->string('time')->default(0);
            $table->string('age');
            $table->string('citizen_image')->default();
            $table->string('citizen_id');
            $table->string('payment')->default(0);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('car_id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
