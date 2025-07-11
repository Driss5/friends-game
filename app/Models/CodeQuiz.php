<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class CodeQuiz extends Model
{
    public function questions() {
        return $this->hasMany(Question::class, 'code_quiz', 'codeQ');
    }
}
