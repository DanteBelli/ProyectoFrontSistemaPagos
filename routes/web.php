<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*Rutas para el NavBar , estan dentro de auth para darle seguridad al sistema , asi me aseguro que este autenticado el usuario*/
    Route::get('/sdg', function () {        
        return view('sdg.blade.php');
    })->name('sdg');

    Route::get('/sdgOc', function () {        
        return view('sdgOc.blade.php');
    })->name('sdgOc');

    Route::get('/liq', function () {        
        return view('liq.blade.php');
    })->name('liq');

    Route::get('/dispo', function () {        
        return view('dispo.blade.php');
    })->name('dispo');

    Route::get('/op', function () {        
        return view('op.blade.php');
    })->name('op');

    Route::get('/presu', function () {        
        return view('presu.blade.php');
    })->name('presu');

    Route::get('/sueldos', function () {        
        return view('sueldos.blade.php');
    })->name('sueldos');

    Route::get('/cajaChica', function () {        
        return view('cajaChica.blade.php');
    })->name('cajaChica');





});

require __DIR__.'/auth.php';
