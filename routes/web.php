<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DaftarBidangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\ForumChatController;
use App\Http\Controllers\ManagemenTugasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});
Route::middleware(['auth', 'role:admin|user'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
    });

    Route::prefix('chat')->group(function () {
        Route::prefix('ai')->group(function () {
            Route::get('/', [ChatController::class, 'index']);
            Route::post('/update', [ChatController::class, 'update']);
        });

        Route::prefix('forum')->group(function () {
            Route::get('/', [ForumChatController::class, 'index']);
            Route::post('/show', [ForumChatController::class, 'show']);
            Route::post('/create', [ForumChatController::class, 'create']);
            Route::post('/store', [ForumChatController::class, 'store']);
        });
    });


    Route::prefix('dokumen')->group(function () {
        Route::get('/', [DokumenController::class, 'index']);
        Route::post('/show', [DokumenController::class, 'show']);
        Route::post('/destroy', [DokumenController::class, 'destroy']);
        Route::post('/download', [DokumenController::class, 'download']);
        Route::post('/store', [DokumenController::class, 'store']);
    });

    Route::prefix('kalendar')->group(function () {
        Route::get('/', [CalendarController::class, 'index']);
        Route::post('/show', [CalendarController::class, 'show']);
        Route::post('/destroy', [CalendarController::class, 'destroy']);
        Route::post('/store', [CalendarController::class, 'store']);
        Route::post('/create', [CalendarController::class, 'create']);
        Route::post('/update', [CalendarController::class, 'update']);
    });

    Route::prefix('managemen_tugas')->group(function () {
        Route::prefix('bidang')->group(function () {
            Route::get('/', [DaftarBidangController::class, 'index']);
            Route::post('/store', [DaftarBidangController::class, 'store']);
        });
        Route::prefix('tugas')->group(function () {
            Route::get('/', [ManagemenTugasController::class, 'index']);
            Route::post('/store', [ManagemenTugasController::class, 'store']);
        });
    });
});

require __DIR__ . '/auth.php';
