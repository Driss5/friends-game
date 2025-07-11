<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function scoreC(Request $request) {
        $score = $request->query('score');
        $code = $request->query('code');

        DB::update('update scores set score = ? WHERE codeS = ?', [
            $score,
            $code
        ]);
        $scoreAff = Score::select('score')->where('codeS', $code)->first();
        return view('FinalQuiz.finalJoin', ['scoreAff' => $scoreAff ]);
    }
}
