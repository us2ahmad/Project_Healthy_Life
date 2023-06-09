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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('certificate');
            $table->string('experience')->nullable();
            $table->string('ban')->default('unbanned');
            $table->string('type')->nullable();
            $table->string('approved')->default('look');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('coaches');
    }
};
