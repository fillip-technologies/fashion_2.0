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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('title')->nullable();
            $table->string('password');

            $table->string('phone', 20)->nullable();

            $table->string('month')->nullable();
            $table->string('day')->nullable();
            $table->string('year')->nullable();

            $table->string('location')->nullable();
            $table->text('address')->nullable();
            $table->text('addres_two')->nullable();

            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode', 20)->nullable();

            $table->string('company')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
