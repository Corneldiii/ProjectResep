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
        return $this->belongsToMany(User::class, 'favorites');
    }

    public function submittedByUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
