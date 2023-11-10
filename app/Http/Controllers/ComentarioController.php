<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //

    public function store(Request $request, User $user, Post $post)
    {


        //validando

        $this->validate($request, [

            'comentario' =>'required|max:255'

        ]);

      // almacenando el comentario
        Comentario::create([

            'user_id'=> auth()->user()->id,
            'post_id' => $post->id,
            'comentario' => $request->comentario

        ]);

        // estoy redireccionando a un usuario despues de comentar

        return back()->with('mensaje', 'comentario realizado corectamente');

    }
}
