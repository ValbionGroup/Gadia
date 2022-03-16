<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/debug', function () {
        return ['message' => 'Welcome to your new sanctum protected API'];
    });
});

Route::get('/infos', function () {
    return [
        'status' => 'dev',
        'version' => '1.0.0',
        'build' => '1',
        'etablisement' => [
            'type' => 'Lycée',
            'name' => 'Victor Duruy',
            'address' => '1 rue de la République, 75010 Paris',
            'country' => 'France',
            'phone' => ''
        ],
        'application' => [
            'name' => 'GADIA',
            'owner' => 'VALBION',
            'url' => 'https://0400017b.gadia.io/',
        ]
    ];
});
