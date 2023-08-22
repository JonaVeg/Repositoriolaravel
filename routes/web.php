<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploControlller;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MaestroController;

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
  //  return view('welcome');
  return "Vista de Bienvenida";
});

Route::get('/usuarios',[EjemploControlller::class,'index']);
Route::get('/usuarios/create',[EjemploControlller::class,'create']);
Route::get('/usuarios/{id}/{nombre?}',[EjemploControlller::class,'show']);
Route::resource('estudiantes', EstudianteController::class);
Route::resource('maestros',MaestroController::class );
// Route::get('/usuarios/{id}', function () {
//     return "Hola estos son los usuarios";
// });


// Route::get('/usuarios/create', function () {
//     return "Hola estos son los usuarios";
// });


// Route::get('/usuarios/{id}{nombre?}', function ($idusuario, $nombreusuario=null) {
//     if($nombreusuario){
//         return "Hola usuario ".$nombreusuario ."tu id es " .$idusuario;
//     }
//     else{
//         return "Hola tu id es: " .$idusuario;
//     }
    
//});
