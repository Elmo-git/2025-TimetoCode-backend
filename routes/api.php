<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserStatController;

Route::apiResource('users', UserController::class);
Route::apiResource('user-stats', UserStatController::class);