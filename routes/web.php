<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\OpdController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\WilayahController;
use Illuminate\Support\Facades\Auth;
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
    return view('tampilan/index');
    //return view('homepage');
});
Route::get('/pelayanan', function () {
    return view('tampilan/pelayanan');
    //return view('pelayanan');
});
// Route::get('/sesi', function () {
//     return view('sesi/index');
// });


// Session
Route::get('/login', [SessionController::class, 'index'] );
Route::post('/sesi/login', [SessionController::class, 'login'] );
Route::get('/register', [SessionController::class, 'register'] );
Route::post('/sesi/register', [SessionController::class, 'createAccount'] );
Route::get('/sesi/logout', [SessionController::class, 'logout'] );

// user
Route::resource('pengajuan', PengajuanController::class)->middleware(('isUser'));


Route::get('/user', [HomeController::class, 'index'] )->middleware('isUser');
Route::get('/user/profil', [ ProfilController::class, 'index'] )->name('profil.user')->middleware('isUser');;
Route::put('/user/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
// Route::prefix('/user')-> group(function (){
// })->middleware('isUser');

// admin
// Route::get('/admin', [HomeController::class, 'admin'] )->middleware('isAdmin');

Route::resource('admin', AdminController::class)->middleware('isAdmin');
Route::put('approve', [AdminController::class, 'approve'])->middleware('isAdmin');

Route::resource('wilayah', WilayahController::class)->middleware('isAdmin');
Route::resource('opd', OpdController::class)->middleware('isAdmin');
Route::resource('layanan', LayananController::class)->middleware('isAdmin');
// Route::resource('admindelete', adminController::class, )->middleware('isAdmin');
// Route::delete('pengajuandelete', AdminController::class, )->middleware('isAdmin');


// Auth::routes(['verify'=> true]);

// coba-coba (Training)
// Route::resource('siswa', SiswaController::class)->middleware('isAdmin');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
