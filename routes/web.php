<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

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
    return view('formulario');
})->name('dashboard');
Route::get('/panel', function () {
    return view('panel');
});
Route::get('/usuarios/{clave}', function ($clave) {
    return view('usuarios')->with("codigo",$clave);
});
Route::get('/alumnos',[StudentController::class,'index']);
Route::post('/alumnos',[StudentController::class,'store']);
 Route::get('/plantilla', function (){
    return view('plantilla');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});






