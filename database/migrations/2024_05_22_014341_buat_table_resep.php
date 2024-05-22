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
            $table -> id()-> primary();
            $table -> string('nama');
            $table ->  string('asal');
            $table ->  text('bahan');
            $table -> text('buat');
            $table -> string('foto')-> unique();

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
