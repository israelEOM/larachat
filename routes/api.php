<?php

use App\Http\Controllers\Api\ChatApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
->middleware(['auth:web'])
->group(function () {

    Route::get('/users', [UserApiController::class, 'index']);

    Route::get('/messages/create', [ChatApiController::class, 'store']);

});

Route::get('/', function () {
    return ['message' => 'ok'];
});