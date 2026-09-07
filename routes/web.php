<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProfileController;
use App\Models\Application;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/*
|--------------------------------------------------------------------------
| Member Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard Siswa
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {

        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        $application = Application::where(
            'user_id',
            auth()->id()
        )->first();

        return view('dashboard', compact('application'));

    })->middleware('verified')->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Roster
    |--------------------------------------------------------------------------
    */

    Route::get('/roster', function () {
        return redirect()->route('about') . '#roster';
    })->name('roster');


    /*
    |--------------------------------------------------------------------------
    | Jadwal Latihan
    |--------------------------------------------------------------------------
    */

    Route::get('/schedule', function () {
        return view('schedule');
    })->name('schedule');


    /*
    |--------------------------------------------------------------------------
    | Galeri
    |--------------------------------------------------------------------------
    */

    Route::get('/gallery', function () {
        return redirect()->route('about') . '#galeri';
    })->name('gallery');


    /*
    |--------------------------------------------------------------------------
    | Pendaftaran
    |--------------------------------------------------------------------------
    */

    Route::get('/application', [
        ApplicationController::class,
        'create'
    ])->name('application');

    Route::post('/application', [
        ApplicationController::class,
        'store'
    ])->name('application.store');


    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [
        ProfileController::class,
        'edit'
    ])->name('profile.edit');

    Route::patch('/profile', [
        ProfileController::class,
        'update'
    ])->name('profile.update');

    Route::delete('/profile', [
        ProfileController::class,
        'destroy'
    ])->name('profile.destroy');


    /*
    |--------------------------------------------------------------------------
    | Admin Dashboard (sekarang dilindungi middleware auth)
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/dashboard', [
        AdminController::class,
        'index'
    ])->name('admin.dashboard');


    /*
    |--------------------------------------------------------------------------
    | Terima Pendaftaran
    |--------------------------------------------------------------------------
    */

    Route::patch('/admin/application/{application}/approve', [
        AdminController::class,
        'approve'
    ])->name('admin.application.approve');


    /*
    |--------------------------------------------------------------------------
    | Tolak Pendaftaran
    |--------------------------------------------------------------------------
    */

    Route::patch('/admin/application/{application}/reject', [
        AdminController::class,
        'reject'
    ])->name('admin.application.reject');


    /*
    |--------------------------------------------------------------------------
    | Edit Anggota
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/member/{application}/edit', [
        AdminController::class,
        'edit'
    ])->name('admin.member.edit');


    /*
    |--------------------------------------------------------------------------
    | Update Anggota
    |--------------------------------------------------------------------------
    */

    Route::patch('/admin/member/{application}', [
        AdminController::class,
        'update'
    ])->name('admin.member.update');


    /*
    |--------------------------------------------------------------------------
    | Hapus Anggota
    |--------------------------------------------------------------------------
    */

    Route::delete('/admin/member/{application}', [
        AdminController::class,
        'destroy'
    ])->name('admin.member.destroy');

});


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';