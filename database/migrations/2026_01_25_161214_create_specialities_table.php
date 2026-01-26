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
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();

            // Basic Info
            $table->string('name');                 // Bone and Joint Care
            $table->string('slug')->unique();       // bone-and-joint-care
            $table->string('banner_image')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('is_active')->default(true);

            // About Section
            $table->text('about_intro')->nullable();     // First paragraph
            $table->longText('about_more')->nullable();  // Hidden "Read More" content

            // Page Sections (matching your pills)
            $table->longText('overview_content')->nullable();
            $table->longText('treatments_content')->nullable();
            $table->longText('facilities_content')->nullable();
            $table->longText('conditions_content')->nullable();
            $table->longText('risks_content')->nullable();
            $table->longText('subspecialties_content')->nullable();

            // SEO (optional but smart)
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialities');
    }
};
