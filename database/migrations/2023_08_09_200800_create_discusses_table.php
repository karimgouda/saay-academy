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
        Schema::create('discusses', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('icon_1')->nullable();
            $table->text('title_1')->nullable();
            $table->text('description_1')->nullable();
            $table->text('icon_2')->nullable();
            $table->text('title_2')->nullable();
            $table->text('description_2')->nullable();
            $table->text('button_icon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discusses');
    }
};
