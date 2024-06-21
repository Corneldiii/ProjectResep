<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;

    protected $table = "profil";
    protected $primaryKey = 'id_profil';
    protected $fillable = ["no_telp","foto_profil","user_id"];

    public function profildetail(){
        return $this->belongsTo(akun::class, 'id_akun', 'user_id');
    }
}
