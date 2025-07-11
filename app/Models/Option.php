<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Option extends Model
{
    protected $fillable = [
        'options',
        'is_correct',
        'question_id',
    ];

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
