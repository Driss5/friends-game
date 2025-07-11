<?php

namespace App\Http\Controllers;
use App\Models\JoinQuiz;

use Illuminate\Http\Request;

// class JoinQuizController extends Controller
// {
//     public function join(Request $request) {        // mab9atch khdama had function kamla
//         $request->validate([
//             'name' => 'required|alpha|min:3|max:7',
//             'code' => 'required|exists:code_quizzes,codeQ|unique:join_quizzes,codeJ'
//         ], [
//             'name.required' => 'iwa dir ghi smytk b3da',
//             'name.alpha' => 'bla ar9am',
//             'name.min' => 'khass ykon ktar mn 3',
//             'name.max' => 'khass ykon 9al mn 3',

//             'code.required' => 'bach baghi tl3ab',
//             'code.unique' => 'rak deja l3abt',
//             'code.exists' => 'awdi b7ala rak ghalt f lcode'
//         ]);

//         $joinCode = new JoinQuiz();
//         $joinCode->name = $request->name;
//         $joinCode->codeJ = $request->code;
//         $joinCode->save();
//         $code = $request->code;
//         return redirect()->route('insertt', ['codeQ' => $code]);
//     }
// }
