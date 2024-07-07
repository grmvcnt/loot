<?php

use App\Http\Controllers\ShoeController;
use App\Http\Middleware\CorsMiddleware;
use Illuminate\Support\Facades\Route;

/*Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::apiResource('shoes', ShoeController::class);
Route::get('/shoe/collections', [ShoeController::class, 'getShoeByCollections']);
