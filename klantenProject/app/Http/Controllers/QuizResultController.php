<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;

class QuizResultController extends Controller
{
    public function index()
    {
        return response()->json(
            QuizResult::latest()->get()
        );
    }
}