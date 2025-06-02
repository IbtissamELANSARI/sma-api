<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable = ['intitule'];

    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }
}