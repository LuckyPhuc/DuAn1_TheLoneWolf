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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('avatar', 100);
            $table->string('address', 100)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('email', 10)->nullable();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
