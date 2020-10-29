<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/conocenos', function () {
    return view('conocenos');
});

/*Auth::routes();
//rutas para logueado
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        //usuario administrador
        if (auth()->user()->tipo_usuario == 0) { //compara si el rol es administrador
            return redirect('administrador/index'); //redirecciona a la carpeta para administrador
        }
        //usuario normal
        elseif (auth()->user()->tipo_usuario == 1) { //compara si el rol es usuario normal
            return redirect('voluntario/index'); //redirecciona a la carpeta para el usuario normal
        }
    });
});
//rutas para administrador
Route::middleware(['auth', 'admin'])->group(function () {
    //***********************************************************************************************
    //vista index
    Route::get('administrador/index', 'InicioController@index_administrador');
    //********************************************************************************************
});

//rutas para alumno
Route::middleware(['auth', 'student'])->group(function () {
    //ver vista index
    //Route::get('voluntario/index', 'StudentController@inicio')->name('usuario-student.index'); //vista inicio
});*/
