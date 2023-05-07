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
        Schema::table('player_training_plans', function (Blueprint $table) {

            $table->foreignId('id_player')->constrained('players')->cascadeOnDelete();
            $table->foreignId('id_training_plan')->constrained('training_plans')->cascadeOnDelete();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('player_training_plans', function (Blueprint $table) {
            //
        });
    }
};
