<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Dans la migration create_votes_table.php
    // public function up(): void
    // {
    //     Schema::create('votes', function (Blueprint $table) {
    //         $table->id();
    //         $table->unsignedBigInteger('candidat_id');
    //         $table->unsignedBigInteger('electeur_id');
    //         $table->timestamps();
    
    //         // $table->foreign('candidat_id')->references('id')->on('candidats');
    //         // $table->foreign('electeur_id')->references('id')->on('electeurs');
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
