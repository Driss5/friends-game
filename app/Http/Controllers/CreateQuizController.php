<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodeQuiz;

class CreateQuizController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required|alpha|min:3|max:7',
            'code' => 'required|min:6|max:6|unique:code_quizzes,codeQ',
        ], [
            'name.required' => 'iwa dir ghi smytk b3da',
            'name.alpha' => 'bla ar9am',
            'name.min' => 'khass ykon ktar mn 3',
            'name.max' => 'khass ykon 9al mn 3',

            'code.required' => 'bach baghi tl3ab',
            'code.min' => 'khass ykon 6 a noss a taman', 
            'code.max' => 'khass ykon 6 a noss a taman',
            'code.unique' => 'awdi had lcode kayn smhna'
        ]);

        $code = strtolower($request->code);
        $newCode = new CodeQuiz();
        $newCode->name = $request->name;
        $newCode->codeQ = $code;
        $newCode->save();
        return view('createAndJoinForm.createQuizFrm', ['codeQ' => $newCode->codeQ]);
    }
}
