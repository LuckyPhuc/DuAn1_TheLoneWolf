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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('body');
            $table->unsignedBigInteger('image_product_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // Foreign key constraint (optional)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('image_product_id')->references('id')->on('image_product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
