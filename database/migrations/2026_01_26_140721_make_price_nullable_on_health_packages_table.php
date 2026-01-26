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
        Schema::table('health_packages', function (Blueprint $table) {
            // This tells the database it's okay if 'price' is empty
            $table->decimal('price', 10, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('health_packages', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable(false)->change();
        });
    }
};
