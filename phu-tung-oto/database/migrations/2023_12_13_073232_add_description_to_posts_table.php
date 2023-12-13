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
        Schema::table('posts', function (Blueprint $table) {
            $table->text('description')->nullable()->after('title'); // Thêm cột mới
        });
    }
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('description'); // Loại bỏ cột trong trường hợp rollback
        });
    }
};
