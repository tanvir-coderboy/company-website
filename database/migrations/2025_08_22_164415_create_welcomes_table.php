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
        Schema::create('welcomes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('item1')->nullable();
            $table->string('item2')->nullable();
            $table->string('item3')->nullable();
            $table->string('item4')->nullable();
            $table->string('item5')->nullable();
            $table->string('button_name')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_type')->nullable();
            $table->string('image')->nullable();
            $table->string('exprience_one_year')->nullable();
            $table->string('exprience_one_text')->nullable();
            $table->string('exprience_two_year')->nullable();
            $table->string('exprience_two_text')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcomes');
    }
};
