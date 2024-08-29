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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("teamHome")->require();
            $table->string("teamHomeLogo")->require();
            $table->string("teamAway")->require();
            $table->string("teamAwayLogo")->require();
            $table->string("stidume")->require();
            $table->date("matchTime")->require();
            $table->string("compitation")->require();
            $table->string("stage")->require();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
