<?php

use App\Http\Controllers\InformasiKerjasamaController;
use App\Http\Controllers\InformasiKerjasamaLuarController;
use App\Http\Controllers\InformasiStatistikController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\KerjasamaControllerLuarNegri;
use App\Http\Controllers\KerjasamaLuarNegriControllerOrigin;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

    Route::get('/', function () {return redirect('/profile');});
    Route::get('/profile', [ProfileController::class, 'create'])->name('profile');
    Route::get('/informasi-kerjasama', [InformasiKerjasamaController::class, 'create'])->name('informasi-kerjasama');
    Route::get('/informasi-kerjasama-luar', [InformasiKerjasamaLuarController::class, 'create'])->name('informasi-kerjasama-luar');
    Route::get('/informasi-statistik', [InformasiStatistikController::class, 'create'])->name('informasi-statistik');

    Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');

	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/kerjasama', [KerjasamaController::class, 'index'])->name('kerjasama');
    Route::get('/kerjasama-add', [KerjasamaController::class, 'addview'])->name('kerjasama.addview');
    Route::post('/kerjasama-add', [KerjasamaController::class, 'add'])->name('kerjasama.add');
    Route::delete('/kerjasama-delete/{id}', [KerjasamaController::class, 'delete'])->name('kerjasama.delete');
    Route::get('/kerjasama-edit/{id}', [KerjasamaController::class, 'editview'])->name('kerjasama.editview');
    Route::put('/kerjasama-edit/{id}', [KerjasamaController::class, 'edit'])->name('kerjasama.edit');


    Route::get('/kerjasama-luar-negri', [KerjasamaControllerLuarNegri::class, 'index'])->name('kerjasama-luar-negri');
    Route::get('/kerjasama-add-luar-negri', [KerjasamaControllerLuarNegri::class, 'addview'])->name('kerjasama-luar-negri.addview');
    Route::post('/kerjasama-add-luar-negri', [KerjasamaControllerLuarNegri::class, 'add'])->name('kerjasama-luar-negri.add');
    Route::delete('/kerjasama-delete-luar-negri/{id}', [KerjasamaControllerLuarNegri::class, 'delete'])->name('kerjasama-luar-negri.delete');
    Route::get('/kerjasama-edit-luar-negri/{id}', [KerjasamaControllerLuarNegri::class, 'editview'])->name('kerjasama-luar-negri.editview');
    Route::put('/kerjasama-edit-luar-negri/{id}', [KerjasamaControllerLuarNegri::class, 'edit'])->name('kerjasama-luar-negri.edit');

//    Route::get('/kerjasama-luar-origin-negri', [KerjasamaLuarNegriControllerOrigin::class, 'index'])->name('kerjasama-luar-origin-negri');
//    Route::get('/kerjasama-add-luar-negri', [KerjasamaLuarNegriControllerOrigin::class, 'addview'])->name('kerjasama-luar-origin-negri.addview');
//    Route::post('/kerjasama-add-luar-negri', [KerjasamaLuarNegriControllerOrigin::class, 'add'])->name('kerjasama-luar-origin-negri.add');

    Route::get('/master', [MasterController::class, 'index'])->name('master');
    Route::get('/user', [UserProfileController::class, 'index'])->name('user');

    Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
    Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');

//	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
//	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
//	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');

	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');

//Route::get('/profile', [PageController::class, 'signup'])->name('sign-up-static');

	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
