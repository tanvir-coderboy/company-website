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
        Schema::create('section_titles', function (Blueprint $table) {
            $table->id();
            $table->string('service_title')->nullable();
            $table->longText('service_description')->nullable();
            $table->string('chosse_title')->nullable();
            $table->longText('chosse_description')->nullable();
            $table->longText('chosse_image')->nullable();
            $table->string('testimonial_title')->nullable();
            $table->longText('testimonial_description')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->longText('portfolio_description')->nullable();
            $table->string('blog_title')->nullable();
            $table->longText('blog_description')->nullable();
            $table->string('contact_title')->nullable();
            $table->longText('contact_description')->nullable();
            $table->string('team_title')->nullable();
            $table->longText('team_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_titles');
    }
};
