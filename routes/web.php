<?php

use App\Http\Controllers\InputController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OpdController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WilayahController;
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
    return view('homepage');
});
// Route::get('/sesi', function () {
//     return view('sesi/index');
// });


// login
Route::get('/login', [SessionController::class, 'index'] );
Route::post('/sesi/login', [SessionController::class, 'login'] );
// register
Route::get('/register', [SessionController::class, 'register'] );
Route::post('/sesi/register', [SessionController::class, 'createAccount'] );
// logout
Route::get('/sesi/logout', [SessionController::class, 'logout'] );

// user
Route::get('/home', [HomeController::class, 'index'] )->middleware('isLogin');


// admin
Route::get('/admin', [HomeController::class, 'admin'] )->middleware('isAdmin');



// crud
Route::resource('wilayah', WilayahController::class)->middleware('isAdmin');
Route::resource('opd', OpdController::class)->middleware('isAdmin');
Route::resource('layanan', LayananController::class)->middleware('isAdmin');



// coba-coba (Training)
Route::resource('siswa', SiswaController::class)->middleware('isAdmin');
