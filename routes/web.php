<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTokenController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\EleveVsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Prof\AppelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
})->middleware('guest');

// Route : AUTH
// Voir /auth.php
require __DIR__.'/auth.php';

// Need login
Route::middleware('auth', '2fa')->group(function () {

    // Route : COMMUNE
    // Profil et API
    Route::middleware('password.confirm')->group(function () {
        Route::get('/account', [UserProfileController::class, 'show'])->name('profile');
        Route::get('/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens');

        require __DIR__.'/account.php';
    });

    // Route : ELEVES
    Route::middleware(['auth', 'student'])->group(function () {
        Route::get('/', function () {
            return redirect('e-dashboard');
        });
        Route::prefix('eleve')->group(function () {
            Route::get('/', [DashboardController::class, 'show'])->name('e-dashboard');
            Route::get('/edt', function () {
                return view('eleve.timetable', ['page_name' => 'Emploi du temps']);
            })->name('e-edt');
            Route::get('/cdt', function () {
                return view('eleve.cdt', ['page_name' => 'Cahier de texte']);
            })->name('e-cdt');
            Route::get('/notes', function () {
                return view('eleve.grades', ['page_name' => 'Notes']);
            })->name('e-notes');
            Route::get('/viescolaire', [EleveVsController::class, 'index'])->name('e-viesco');
            Route::get('/self', function () {
                return view('eleve.self', ['page_name' => 'Demi-pension']);
            })->name('e-self');
            Route::get('/stage', function () {
                return view('eleve.stage', ['page_name' => 'Stage']);
            })->name('e-stage');
            Route::get('/message', function () {
                return view('eleve.message', ['page_name' => 'Messagerie']);
            })->name('e-msg');
            Route::get('/message/information', function () {
                return view('eleve.information', ['page_name' => 'Messagerie - Information']);
            })->name('e-info');
            Route::get('/message/sondage', function () {
                return view('eleve.sondage', ['page_name' => 'Messagerie - Sondage']);
            })->name('e-sondage');
            Route::get('/friend', [FriendshipController::class, 'index'])->name('friends.show');
        });
    });

    // Route : PROF
    Route::middleware(['auth', 'teacher'])->group(function () {
        Route::get('/', function () {
            return redirect('t-dashboard');
        });
        Route::prefix('prof')->group(function () {
            Route::get('/', function () {
                return view('common.dashboard', ['page_name' => 'Tableau de bord', 'spaceType' => 'Professeur']);
            })->name('t-dashboard');
            Route::get('/viescolaire/appel', [AppelController::class, 'show'])->name('p-appel');
        });
    });

    // Route : VIE SCOLAIRE
    Route::middleware(['auth', 'viesco'])->group(function () {
        Route::get('/', function () {
            return redirect('v-dashboard');
        });
        Route::prefix('viescolaire')->group(function () {
            Route::get('/', function () {
                return view('viesco.dashboard', ['page_name' => 'Tableau de bord', 'spaceType' => 'Vie scolaire']);
            })->name('v-dashboard');
        });
    });

    // Route : PARENTS
    Route::middleware(['auth', 'parents'])->group(function () {
        Route::get('/', function () {
            return redirect('p-dashboard');
        });
        Route::prefix('parent')->group(function () {
            Route::get('/', function () {
                return view('common.dashboard', ['page_name' => 'Tableau de bord', 'spaceType' => 'Responsable']);
            })->name('p-dashboard');
        });
    });

    // Route : DIRECTION
    Route::middleware(['auth', 'direction'])->group(function () {
        Route::get('/', function () {
            return redirect('/direction');
        });
        Route::prefix('direction')->group(function () {
            Route::get('/', function () {
                return view('direction.dashboard', ['page_name' => 'Tableau de bord', 'spaceType' => 'Direction', 'situation' => '0']);
            })->name('d-dashboard');
            require __DIR__.'/settings.php';
        });
    });
});