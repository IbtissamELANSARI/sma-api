<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'nom', 'email', 'groupe_id'];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }
}