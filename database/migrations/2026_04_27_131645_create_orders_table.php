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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('order_no')->unique();
            $table->decimal('subtotal',12,2);
            $table->decimal('tax',12,2)->default(0);
            $table->decimal('shipping_charge',12,2)->default(0);
            $table->decimal('grand_total',12,2);
            $table->string('payment_status')->default('pending');
            $table->string('order_status')->default('placed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
