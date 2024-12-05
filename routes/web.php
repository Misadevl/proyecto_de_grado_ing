<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PatientController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/mis-citas', function () {
        return view('dashboard.paciente.mis-citas');
    })->name('mis-citas');
    /* Route::get('/administrador/roles', [RoleController::class, 'index'])
        ->name('administrador.roles'); */
    Route::resource('roles', RoleController::class)->names('admin.roles');   
    Route::resource('users', UserController::class)->names('admin.users');
    Route::resource('patients', PatientController::class)->names('admin.patients');

});
