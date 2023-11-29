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
        Schema::create('nhat_ky_hoat_dong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nhan_vien_id');
            $table->dateTime('thoi_gian');
            $table->text('hoat_dong');
            $table->text('chi_tiet')->nullable();
            $table->timestamps();

            $table->foreign('nhan_vien_id')->references('id')->on('nhan_vien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhat_ky_hoat_dong');
    }
};