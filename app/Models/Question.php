<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['text_question', 'options', 'correct_option', 'score', 'competence_id'];

    protected $casts = [
        'options' => 'array'
    ];

    public function competence()
    {
        return $this->belongsTo(Competence::class);
    }
}