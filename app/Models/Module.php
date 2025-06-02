<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['intitule', 'masse_horaire', 'filiere_id'];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function competences()
    {
        return $this->hasMany(Competence::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}