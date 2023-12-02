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
        Schema::create('san_pham_lien_quan', function (Blueprint $table) {
            $table->unsignedBigInteger('san_pham_id');
            $table->unsignedBigInteger('san_pham_lien_quan_id');
            $table->string('loai_quan_he')->nullable();
            $table->timestamps();

            $table->primary(['san_pham_id', 'san_pham_lien_quan_id']);
            $table->foreign('san_pham_id')->references('id')->on('phu_tung');
            $table->foreign('san_pham_lien_quan_id')->references('id')->on('phu_tung');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham_lien_quan');
    }
};