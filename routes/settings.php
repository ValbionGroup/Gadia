<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\Settings\GlobalController;
use App\Http\Controllers\Settings\SpacesController;

Route::get('/settings', [SettingsController::class, 'show'])->name('gadia-settings');

Route::get('/settings/global', [GlobalController::class, 'show'])->name('settings.global');
Route::post('/settings/global/save', [GlobalController::class, 'save'])->name('settings.global.save');

Route::get('/settings/spaces', [SpacesController::class, 'show'])->name('settings.spaces');
Route::post('/settings/spaces/save/spacelock', [SpacesController::class, 'spacelock'])->name('settings.spaces.save.spacelock');
Route::post('/settings/spaces/save/cas', [SpacesController::class, 'cas'])->name('settings.spaces.save.cas');
