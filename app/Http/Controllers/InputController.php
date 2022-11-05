<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    function layanan(){
        return view('input.layanan');
    }
    function opd(){
        return view('input.opd');
    }
    function wilayah(){
        return view('input.wilayah');
    }
}



// Route::get('/layanan', [InputController::class, 'layanan']);
// Route::get('/opd', [InputController::class, 'opd']);
// Route::get('/wilayah', [InputController::class, 'wilayah']);
