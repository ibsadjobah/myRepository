<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controller
{
    //
   public function index()
   {
    $articles= [
        'le test ',
        'le build ',
    ];
    
    return view('articles', compact('articles'));
     
   }

   public function show($id)
   {
    $posts=[
        1 =>'le premier id',
        2 =>'le deuxieme id',

    ];

    $post= $posts[$id] ?? 'pas d\'article disponible';
    return view('article', ['post' => $post]);
   }

   public function contact()
   {
    return view('contact');
   }
}
