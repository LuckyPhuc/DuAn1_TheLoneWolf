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
        Schema::create('khuyen_mai_san_pham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('khuyen_mai_id');
            $table->unsignedBigInteger('phu_tung_id');
            $table->decimal('phan_tram_giam_gia', 5, 2)->nullable();
            $table->decimal('so_tien_giam_gia', 10, 2)->nullable();
            $table->timestamps();

            $table->foreign('khuyen_mai_id')->references('id')->on('khuyen_mai');
            $table->foreign('phu_tung_id')->references('id')->on('phu_tung');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khuyen_mai_san_pham');
    }
};