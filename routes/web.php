<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateQuizController;
use App\Http\Controllers\JoinQuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/testo', function () {
    return view('component.createAndJoin');
});

Route::get('/createQ', function () {
    return view('createAndJoin.createQuiz');
})->name('createQ');
Route::get('/joinQ', function () {
    return view('createAndJoin.joinQuiz');
})->name('joinQ');

Route::post('createQuiz', [CreateQuizController::class, 'create'])->name('createQuiz');
Route::post('joinQuiz', [JoinQuizController::class, 'join'])->name('joinQuiz');

Route::get('joinQuiz', function () {
    return view('createAndJoin.joinQuiz');
});

Route::get('createQuizFrm', function () {
    return view('createAndJoinForm.createQuizFrm');
});

Route::get('joinQuizFrm', function () {
    return view('createAndJoinForm.joinQuizFrm');
});

Route::get('finalQuiz', function () {
    return view('finalQuiz.finalCreate');
});

Route::post('createQuestions', [QuestionController::class, 'InsertQuestions'])->name('createQuestions');

Route::get('/questions', function () {
    return view('createAndJoinForm.joinQuizFrm');
});

Route::post('/join', [QuestionController::class, 'join'])->name('joinQuiz');

use App\Livewire\QuestionList;
Route::get('/quiz/{code}', function ($code) {
    return view('components.layouts.app', compact('code'));
})->name('quizPage');

Route::get('score', [ScoreController::class, 'scoreC'])->name('score');

Route::post('/contact', [ContactController::class, 'contactUsC'])->name('contact');