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
    //consulta base de datos nivel rutas 
    $posts = [
        ['id' =>1, 'title' => 'php',    'slug' => 'php'],
        ['id' =>2, 'title' => 'Laravel',    'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    //consulta base de datos nivel rutas 
    $post = $slug;

    return view('post' , ['post' => $post]);
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});
