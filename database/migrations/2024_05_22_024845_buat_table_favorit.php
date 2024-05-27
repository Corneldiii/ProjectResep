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
        Schema::create('favorit', function(Blueprint $table ){
            $table -> id('id_fav') -> primary()-> unique();
            $table -> unsignedBigInteger('id_resep');
            $table -> unsignedBigInteger('id_akun');

            $table -> foreign('id_akun') -> references('id_akun')-> on('akun')->onDelete('cascade');
            $table->foreign('id_resep')->references('id_resep')->on('resep')->onDelete('cascade');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite');
    }
};
