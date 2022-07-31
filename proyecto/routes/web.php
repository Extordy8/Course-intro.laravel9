<?php

/**clase para comunicarse por http */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get   | Consulta
 * Route::post   | Guardar
 * Route::delete | Eliminar
 * Route::put   | Actualizar
 */
Route::get('/', function () {
    return 'Ruta home';
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    //consulta base de datos

    return $slug;
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});
