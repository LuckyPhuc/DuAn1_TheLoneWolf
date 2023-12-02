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
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->bigIncrements('chi_tiet_don_hang_id');
            $table->unsignedBigInteger('don_dat_hang_id');
            $table->unsignedBigInteger('phu_tung_id');
            $table->integer('so_luong');
            $table->decimal('don_gia', 8, 2);

            $table->foreign('don_dat_hang_id')->references('id')->on('don_dat_hang')->onDelete('cascade');
            $table->foreign('phu_tung_id')->references('id')->on('phu_tung')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_don_hang');
    }
};