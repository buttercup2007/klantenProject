<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/quiz/questions', [QuizController::class, 'questions']);
Route::post('/quiz/submit', [QuizController::class, 'submit']);