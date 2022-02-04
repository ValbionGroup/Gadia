<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\Settings\EtablissementController;
use App\Http\Controllers\Settings\GeneralController;
use App\Http\Controllers\Settings\AbsenceController;
use App\Http\Controllers\Settings\PunishmentController;
use App\Http\Controllers\Settings\EvaluationController;
use App\Http\Controllers\Settings\AccompanyingController;
use App\Http\Controllers\Settings\InfirmaryController;
use App\Http\Controllers\Settings\CdiController;
use App\Http\Controllers\Settings\GadiaController;

Route::get('/settings', [SettingsController::class, 'show'])->name('gadia-settings');

Route::get('/settings/etablisement', [EtablissementController::class, 'show'])->name('settings.etab');
Route::post('/settings/etablisement/save/identiy', [EtablissementController::class, 'saveIdentity'])->name('settings.etab.save.identity');
Route::post('/settings/etablisement/save/logo', [EtablissementController::class, 'saveLogo'])->name('settings.etab.save.logo');
Route::post('/settings/etablisement/save/signature', [EtablissementController::class, 'saveSignatures'])->name('settings.etab.save.signatures');
Route::get('/settings/etablisement/delete/signature/{id}', [EtablissementController::class, 'deleteSignature'])->name('settings.etab.delete.signature');
Route::post('/settings/etablisement/save/cachet', [EtablissementController::class, 'saveCachet'])->name('settings.etab.save.cachet');
Route::post('/settings/etablisement/save/calendar', [EtablissementController::class, 'getNewVacations'])->name('settings.etab.save.calendar');
Route::get('/settings/etablisement/calendar/getNewVacations', [EtablissementController::class, 'getNewVacations'])->name('settings.etab.calendar.getNewVacations');
Route::post('/settings/etablisement/save/day', [EtablissementController::class, 'saveJourney'])->name('settings.etab.save.journey');


Route::get('/settings/general', [GeneralController::class, 'show'])->name('settings.general');
Route::post('/settings/general/save/spacelock', [GeneralController::class, 'spacelock'])->name('settings.general.save.spacelock');

Route::get('/settings/absence', [AbsenceController::class, 'show'])->name('settings.absence');
Route::post('/settings/absence/save', [AbsenceController::class, 'save'])->name('settings.absence.save');

Route::get('/settings/punishment', [PunishmentController::class, 'show'])->name('settings.punishment');
Route::post('/settings/punishment/save', [PunishmentController::class, 'save'])->name('settings.punishment.save');

Route::get('/settings/evaluation', [EvaluationController::class, 'show'])->name('settings.evaluation');
Route::post('/settings/evaluation/save', [EvaluationController::class, 'save'])->name('settings.evaluation.save');

Route::get('/settings/accompanying', [AccompanyingController::class, 'show'])->name('settings.accompanying');
Route::post('/settings/accompanying/save', [AccompanyingController::class, 'save'])->name('settings.accompanying.save');

Route::get('/settings/infirmary', [InfirmaryController::class, 'show'])->name('settings.infirmary');
Route::post('/settings/infirmary/save', [InfirmaryController::class, 'save'])->name('settings.infirmary.save');

Route::get('/settings/cdi', [CdiController::class, 'show'])->name('settings.cdi');
Route::post('/settings/cdi/save', [CdiController::class, 'save'])->name('settings.cdi.save');

Route::get('/settings/gadia', [GadiaController::class, 'show'])->name('settings.gadia');
Route::post('/settings/gadia/save', [GadiaController::class, 'save'])->name('settings.gadia.save');
