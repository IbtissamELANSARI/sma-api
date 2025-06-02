<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}