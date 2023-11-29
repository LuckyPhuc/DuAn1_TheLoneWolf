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
        Schema::create('hinh_anh_san_pham', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('phu_tung_id');
            $table->string('duong_dan_hinh_anh');
            $table->string('mo_ta')->nullable();
            $table->integer('thu_tu_hien_thi')->default(0);
            $table->timestamps();

            $table->foreign('phu_tung_id')->references('id')->on('phu_tung');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hinh_anh_san_pham');
    }
};