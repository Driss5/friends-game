<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\JoinQuiz;
use App\Models\Score;
use App\Models\CodeQuiz;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{

    public function join(Request $request)
    {
        $code = $request->input('code');

        $request->validate([
            'name' => 'required|alpha|min:3|max:7',
            'code' => 'required|exists:code_quizzes,codeQ|unique:join_quizzes,codeJ'
        ], [
            'name.required' => 'Your Name Please',
            'name.alpha' => 'Only Charachter Please',
            'name.min' => 'Minimun 3 char',
            'name.max' => 'maximum 10 char',

            'code.required' => 'Enter Code Please',
            'code.unique' => 'This Code Already Exist',
            'code.exists' => 'This Code Note Exist'
        ]);

        $checkTrue = CodeQuiz::select('completed')->where('codeQ', $code)->first();
            if ($checkTrue && $checkTrue->completed) {
                $joinCode = new JoinQuiz();
                $joinCode->name = $request->name;
                $joinCode->codeJ = $request->code;
                $joinCode->save();
                $code = $request->code;

                $score = new Score();
                $score->codeS = $code;
                $score->score = 0;
                $score->save();
                return redirect()->route('quizPage', ['code' => $code]);
            } else {
                $error = 'Khlih ghi ykmal';
                return redirect()->back()->with('error', 'Khlih ghi ykmal');
            }
        
    }

    public function InsertQuestions(Request $request) {

    $codeQ = $request->codeQ;
    foreach ($request->input('questions') as $q) {
    // Insert question
    $question = Question::create([
        'question' => $q['text'],
        'custom_correct' => $q['msg_true'] ?? null,
        'custom_incorrect' => $q['msg_false'] ?? null,
        'code_quiz' => $codeQ 
    ]);
     // Insert its 4 options
    foreach ($q['options'] as $idx => $optText) {
        $question->options()->create([
            'options' => $optText,
            'is_correct' => $idx === (int)$q['correct']
        ]);
    }
}
    DB::update('update code_quizzes set completed = ? WHERE codeQ = ?', [
            true,
            $codeQ
        ]);
    return view('finalQuiz.finalCreate');
    
    }
}