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
        Schema::create(
            'website_seo',
            function (Blueprint $table) {
                $table->id();
                $table->string('title', 100)->nullable();
                $table->string('description', 100)->nullable();
                $table->string('hotline', 10)->nullable();
                $table->string('email_support', 100)->nullable();
                $table->string('facebook', 100)->nullable();
                $table->string('youtube', 100)->nullable();
                $table->string('instagram', 100)->nullable();
                $table->string('tiktok', 100)->nullable();
                $table->string('zalo', 10)->nullable();
                $table->timestamps();
            }
        );
    }
    public function down()
    {
        Schema::dropIfExists('website_seo');
    }
};
