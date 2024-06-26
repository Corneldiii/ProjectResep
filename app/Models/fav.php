<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fav extends Model
{
    use HasFactory;

    protected $table = "favorit";

    protected $fillable = ["id_resep","id_akun","status"];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'id_akun', 'id_akun');
    }
}
