<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;

    protected $table = "akun";
    protected $primaryKey = 'id_akun';
    protected $fillable = ["username","password"];

    public static function getIdAkunAttribute($id_akun)
    {
        return $id_akun;
    }

    public function favoriteResep()
    {
        return $this->belongsToMany(Resep::class, 'favorit', 'id_akun', 'id_resep');
    }

    public function submittedResep()
    {
        return $this->hasMany(Resep::class, 'user_id');
    }

    public function profil(){
        return $this->hasOne(profil::class, 'user_id', 'id_akun');
    }
}
