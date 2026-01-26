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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();

            $table->string('cta_text')->nullable();
            $table->string('cta_link')->nullable();

            $table->longText('about')->nullable();
            $table->longText('about_more')->nullable();

            $table->longText('overview')->nullable();
            $table->json('symptoms')->nullable();
            $table->json('causes')->nullable();
            $table->json('risks')->nullable();
            $table->json('diagnosis')->nullable();
            $table->json('treatment')->nullable();
            $table->longText('recovery')->nullable();

            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditions');
    }
};
