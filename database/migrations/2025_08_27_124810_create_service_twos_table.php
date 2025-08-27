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
        Schema::create('service_twos', function (Blueprint $table) {
            $table->id();
            $table->string('service_type')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('files')->nullable();
            $table->string('serial')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_twos');
    }
};
