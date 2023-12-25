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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", 45);
            $table->text("ingredients");
            $table->text("preparation");
            $table->unsignedBigInteger("categories_id");
            $table->unsignedBigInteger("themes_id")->nullable();
            $table->string("image_path");

            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('themes_id')->references('id')->on('themes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
