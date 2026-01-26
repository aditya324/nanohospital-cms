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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();

            $table->string('photo')->nullable();

            $table->string('qualification')->nullable();
            $table->string('designation')->nullable(); // Role/Title
            $table->string('kmc_number')->nullable();
            $table->string('location')->nullable(); // Hulimavu / Uttarahalli / Both

            $table->unsignedInteger('experience_years')->nullable();

            $table->longText('about')->nullable();

            
            $table->foreignId('speciality_id')
                ->constrained('specialities')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
