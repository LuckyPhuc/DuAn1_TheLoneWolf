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
        Schema::create('couple_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('couple_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->timestamps();

            $table->foreign('couple_id')->references('id')->on('couple');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('couple_product');
    }
};