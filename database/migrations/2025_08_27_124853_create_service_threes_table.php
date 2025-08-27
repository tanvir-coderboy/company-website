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
        Schema::create('service_threes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('vat')->nullable();
            $table->string('duration')->nullable();
            $table->string('speed')->nullable();
            $table->string('serial')->nullable();
            $table->string('list_1')->nullable();
            $table->string('list_2')->nullable();
            $table->string('list_3')->nullable();
            $table->string('list_4')->nullable();
            $table->string('list_5')->nullable();
            $table->string('list_6')->nullable();
            $table->string('list_7')->nullable();
            $table->string('button_name')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_type')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_threes');
    }
};
