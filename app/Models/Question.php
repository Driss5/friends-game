<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Option;
use App\Models\CodeQuiz;

class Question extends Model
{

     protected $fillable = [
        'question',
        'custom_correct',
        'custom_incorrect',
        'code_quiz',
    ];

    public function options() {
        return $this->hasMany(Option::class);
    }

    public function codeQuiz() {
        return $this->belongsTo(CodeQuiz::class, 'code_quiz', 'codeQ');
    }
}
