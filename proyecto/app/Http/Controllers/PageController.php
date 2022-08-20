<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        //consulta base de datos nivel rutas 
    $posts = [
        ['id' =>1, 'title' => 'php',    'slug' => 'php'],
        ['id' =>2, 'title' => 'Laravel',    'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
    }
    public function post($slug)
    {
    //consulta base de datos nivel rutas 
    $post = $slug;

    return view('post' , ['post' => $post]);
    }
}
