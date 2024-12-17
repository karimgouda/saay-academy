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
        Schema::create('services_menus', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('sub_description')->nullable();
            $table->text('sub_title_2')->nullable();
            $table->text('sub_description_2')->nullable();
            $table->text('sub_title_3')->nullable();
            $table->text('sub_description_3')->nullable();
            $table->text('image')->nullable();
            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();
            $table->text('video')->nullable();
            $table->text('key')->nullable();
            $table->text('progresses_titles')->nullable();
            $table->text('progresses_percentages')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_menus');
    }
};
