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
        Schema::create('phu_tung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_phu_tung');
            $table->text('mo_ta')->nullable();
            $table->decimal('gia', 8, 2);
            $table->integer('so_luong_ton');
            $table->unsignedBigInteger('danh_muc_id');
            $table->timestamps();

            $table->foreign('danh_muc_id')->references('id')->on('danh_muc_san_pham');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phu_tung');
    }
};