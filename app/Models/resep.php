<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;

    protected $table = "resep";

    protected $fillable = ["nama","asal","bahan","langkah","foto","user_id"];

    public function favoritedByUsers()
    {
        return $this->belongsToMany(akun::class, 'id_akun','user_id');
    }

    public function submittedByUser()
    {
        return $this->belongsTo(fav::class, 'user_id');
    }
}
