<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\NoCache;

Route::group(['middleware' => [NoCache::class]], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/another', [AuthManager::class, 'another'])->name('another');

    Route::get('/page', [AuthManager::class, 'page'])->name('page');

    Route::get('/lrt', [AuthManager::class, 'lrt'])->name('lrt');

    Route::get('/fp', [AuthManager::class, 'fp'])->name('fp');

    Route::get('/a', [AuthManager::class, 'a'])->name('a');

    Route::get('/route', [AuthManager::class, 'route'])->name('route');

    Route::get('/ts', [AuthManager::class, 'ts'])->name('ts');

    Route::get('/login', [AuthManager::class, 'login'])->name('login');
    Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

    Route::get('/register', [AuthManager::class, 'register'])->name('register');
    Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

    Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

    Route::get('/admin', [AuthManager::class, 'admin'])->name('admin');

    Route::get('/forgot', [AuthManager::class, 'showForgotPasswordForm'])->name('forgot.password');
    Route::post('/forgot', [AuthManager::class, 'sendPasswordResetLink'])->name('forgot.password.post');

    Route::get('/newpage', [AuthManager::class, 'newpage'])->name('newpage');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard')
            ->middleware(AdminMiddleware::class);
    });



});
