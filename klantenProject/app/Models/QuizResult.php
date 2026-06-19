<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $fillable = [
        'answers',
        'score',
        'total',
    ];

    protected $casts = [
        'answers' => 'array',
    ];
}