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
        Schema::create('resep', function (Blueprint $table){
            $table -> id('id_resep')-> primary();
            $table -> string('nama');
            $table ->  string('asal');
            $table ->  text('bahan');
            $table -> text('langkah');
            $table -> string('foto')-> unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_akun')->on('akun');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resep');
    }
};
