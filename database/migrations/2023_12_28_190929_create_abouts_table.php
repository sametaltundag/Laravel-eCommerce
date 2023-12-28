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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('image')->nullable();


            $table->string('text1');
            $table->string('text1_icon')->nullable();
            $table->string('text1_text');

            $table->string('text2');
            $table->string('text2_icon')->nullable();
            $table->string('text2_text');

            $table->string('text3');
            $table->string('text3_icon')->nullable();
            $table->string('text3_text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
