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
        Schema::table('products', function (Blueprint $table) {

            $table->string('brand')->nullable()->after('name');
            $table->string('fabric')->nullable()->after('brand');
            $table->string('fit')->nullable()->after('fabric');

            $table->text('short_description')->nullable()->after('fit');
            $table->longText('description')->nullable()->change();

            $table->string('meta_title')->nullable()->after('description');
            $table->text('meta_description')->nullable()->after('meta_title');

            $table->boolean('is_featured')->default(0)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
