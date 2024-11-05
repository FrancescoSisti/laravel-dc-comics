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
        Schema::create('videogames', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('publisher');
            $table->string('developer');
            $table->date('release_date');
            $table->string('genre');
            $table->string('platform');
            $table->decimal('price', 8, 2);
            $table->integer('rating')->nullable();
            $table->string('cover_image')->nullable();
            $table->boolean('multiplayer')->default(false);
            $table->integer('max_players')->nullable();
            $table->string('language');
            $table->string('age_rating');
            $table->integer('storage_required')->comment('Storage space required in MB');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videogames');
    }
};
