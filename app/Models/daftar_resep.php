<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_resep extends Model
{
    use HasFactory;

    protected $table = "daftarresep";
    protected $fillable = ["nama","asal","bahan","langkah","foto","user_id","status"];
}
