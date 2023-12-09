<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->Integer('hotline');
            $table->string('email_support', 100);
            $table->string('facebook', 100);
            $table->string('youtube', 100);
            $table->string('instagram', 100);
            $table->string('tiktok', 100);
            $table->Integer('zalo');
            $table->string('logo_head', 100);
            $table->string('logo_footer', 100);
            $table->string('head_banner', 100);
            $table->string('middle_banner', 100);
            $table->string('bottom_banner', 100);
            $table->string('favicon', 100);
            $table->string('meta_description', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
