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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('category_id')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('serial')->nullable();
            $table->string('button_name')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_type')->nullable();
            $table->string('button_status')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keyword')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
