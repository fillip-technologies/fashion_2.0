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
        Schema::create('order_packagings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->boolean('shopping_bag')->default(0);
            $table->boolean('gift_order')->default(0);
            $table->boolean('empty_envelope')->default(0);
            $table->boolean('hide_price_bill')->default(0);
            $table->boolean('box_packaging')->default(0);
            $table->boolean('dust_bag')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_packagings');
    }
};
