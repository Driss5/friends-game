<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodeQuiz;

class CreateQuizController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required|alpha|min:3|max:10',
            'code' => 'required|min:6|max:6|unique:code_quizzes,codeQ',
        ], [
            'name.required' => 'Your Name Please',
            'name.alpha' => 'Only Charachter Please',
            'name.min' => 'Minimun 3 char',
            'name.max' => 'maximum 10 char',

            'code.required' => 'Enter Code Please',
            'code.min' => 'Minim 6 char', 
            'code.max' => 'Max 6 char',
            'code.unique' => 'This Code Already Exist'
        ]);

        $code = strtolower($request->code);
        $newCode = new CodeQuiz();
        $newCode->name = $request->name;
        $newCode->codeQ = $code;
        $newCode->save();
        return view('createAndJoinForm.createQuizFrm', ['codeQ' => $newCode->codeQ]);
    }
}
