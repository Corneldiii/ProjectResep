<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;

    protected $table = "resep";

    protected $primaryKey = 'id_resep';

    protected $fillable = ["nama", "asal", "bahan", "langkah", "foto", "user_id"];

    public function favoritedByUsers()
    {
        return $this->belongsToMany(akun::class, 'favorit', 'id_resep', 'id_akun')
                    ->withPivot('status');
    }

    // Relasi many-to-one dengan Akun (user yang mengirim resep)
    public function submittedByUser()
    {
        return $this->belongsTo(akun::class, 'user_id');
    }

    public function favorit()
    {
        return $this->hasMany(fav::class, 'id_resep', 'id_resep');
    }
}
