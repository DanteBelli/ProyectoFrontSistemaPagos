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
        return view('consultas.sdg');
    })->name('sdg');

    Route::get('/sdgOc', function () {        
        return view('consultas.sdgOc');
    })->name('sdgOc');

    Route::get('/liq', function () {        
        return view('consultas.liq');
    })->name('liq');

    Route::get('/dispo', function () {        
        return view('consultas.dispo');
    })->name('dispo');

    Route::get('/op', function () {        
        return view('consultas.op');
    })->name('op');

    Route::get('/presu', function () {        
        return view('consultas.presu');
    })->name('presu');

    Route::get('/sueldos', function () {        
        return view('consultas.sueldos');
    })->name('sueldos');

    Route::get('/cajaChica', function () {        
        return view('consultas.cajaChica');
    })->name('cajaChica');

    /*Rutas dropDownComedor*/
    Route::get('/comedor.sdg', function () {        
        return view('consultas.comedor.sdgCom');
    })->name('comedor.sdg');
    Route::get('/comedor.liq', function () {        
        return view('consultas.comedor.liqCom');
    })->name('comedor.liq');
    Route::get('/comedor.op', function () {        
        return view('consultas.comedor.opCom');
    })->name('comedor.op');



});

require __DIR__.'/auth.php';
