<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('home');
});

Route::get('/generate-quiz-token', function () {
    $token = \Illuminate\Support\Str::random(32);

    Cache::put("quiz_token_$token", true, now()->addMinutes(10));

    return response()->json([
        'token' => $token
    ]);
});

Route::get('/validate-quiz-token/{token}', function ($token) {
    if (!Cache::has("quiz_token_$token")) {
        abort(403);
    }

    return response()->json(['valid' => true]);
});