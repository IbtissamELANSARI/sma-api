<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = ['matricule', 'nom', 'email', 'secteur_id'];

    public function secteur()
    {
        return $this->belongsTo(Secteur::class);
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
}