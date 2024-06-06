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
        Schema::create('ingredient_recipe', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('recipe_id')->nullable();
           $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('set null');

           $table->unsignedBigInteger('ingredient_id')->nullable();
           $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_recipe');
    }
};
