<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = ['intitule', 'competence_id'];

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}