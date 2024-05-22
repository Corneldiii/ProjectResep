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
            $table -> id() -> primary()-> unique();
            $table -> integer('id_makanan');
            $table -> unsignedBigInteger('id_akun');
            $table -> foreign('id_akun') -> references('id_akun')-> on('akun');

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
