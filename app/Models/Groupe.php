<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = ['intitule', 'filiere_id'];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}