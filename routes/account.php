<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\TwoFactorAuthController;
use App\Htpp\Controllers\Account\SessionsController;
use App\Http\Controllers\Account\PasswordController;

// Account
Route::post('/account/settings/mfa/enable', [TwoFactorAuthController::class, 'setup'])->name('account.mfa.enable');
Route::post('/account/settings/mfa/disable', [TwoFactorAuthController::class, 'delete'])->name('account.mfa.disable');

Route::post('/account/settings/sessions/logout', [SessionsController::class, 'logout'])->name('account.sessions.logout');

Route::post('/account/settings/password/change', [PasswordController::class, 'change'])->name('account.password.change');
