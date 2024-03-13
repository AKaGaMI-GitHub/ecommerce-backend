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
        Schema::create('detail_products', function (Blueprint $table) {
            $table->id();
            $table->uuid('product_id')->unique();
            $table->boolean('is_preoder');
            $table->integer('preoder_time')->nullable();
            $table->integer('merk_id');
            $table->integer('etalase_id');
            $table->text('detail_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_products');
    }
};
