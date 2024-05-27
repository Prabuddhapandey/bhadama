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
        Schema::table('list_cars', function (Blueprint $table) {
            $table->string('type')->nullable();
            $table->integer('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('list_cars', function (Blueprint $table) {
            $table->string('type');
            $table->string('user_id');
        });
    }
};
