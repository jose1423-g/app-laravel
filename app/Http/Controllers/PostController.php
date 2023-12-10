<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\SaveFormValidate;


class PostController {

    /* se utliza cuando solo hay un metodo en un controlador */
    // public function __invoke()
    // {
    //     return "blog";
    // }

    public function index () {
        /* Ejemplo basico */
        // $arreglo = [
        //     ["titulo" => "holis"],
        //     ["titulo" => "foo"],
        // ];
        // return view('/blog', ['arreglo' => $arreglo]);

        /*  class DB permite hacer un crud */
        // $arreglo = DB::table('users')->get();

        /* Obtiene los datos por id */
        // $arreglo = Post::find($id);

        /* guardar o actualizar */
        // $arreglo = Post::save();

        /* Elimina */
        // $arreglo = Post::delete();

        /* obtiene todos los datos de la tabla */
        $arreglo = Post::get();
        return view('posts.index', ['arreglo' => $arreglo]);
    }

    /* Hace lo mismo de arriba pero con Type Hints, la variable que recibimos es de tipo post  */
    // public function show(Post $post) {
        // return $post;
    // }

    public function show ($post) {
        /* eloquent convierte la respuesta a formato json */
        /* si encuentra algo muestra el contenido si no muestra un error 404 */
        $valor = Post::findOrFail($post);
        return view('posts.show', ['valor' => $valor]);
    }


    public function create () {
        return view('posts.create', ['valor' => new Post]);
    }

    /* crea un nuevo elemento */
    public function store (SaveFormValidate $request) {
        /* ejemplo 1 hace los mismo que lo de abajo */
        // return request();
        // return $request;

        /* seleccion de un input en especifico */
        // return $request->input('Titulo');

        /* Validacion de formulario */
        // $validate =  $request->validate([
        //     'Titulo' => ['required'],
        //     'Que_es' => ['required']
        // ]);

        /*  esto es lo mismo que el create */
        // $post = new Post;
        // $post->Titulo = $request->input('Titulo');
        // $post->Que_es = $request->input('Que_es');
        // $post->save();

        post::create($request->validated());


        /* mesajes de session flash solo  duran una peticion */
        session()->flash('status', 'Elemento creado');

        /* redirecciona a la pagina deseada responde al nombre de rutas */
        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }

    public function edit (Post $post) {
        return view('posts.edit', ['valor' => $post]);
    }

    public function update (SaveFormValidate $request, Post $post) {
        /* validaciones */
        // $validate = $request->validate([
        //     'Titulo' => ['required'],
        //     'Que_es' => ['required']
        // ]);

        /* Esto es los mismo que el update */
        // $post->Titulo = $request->input('Titulo');
        // $post->Que_es = $request->input('Que_es');
        // $post->save();

        /* metodo validated ya esta definido en laravel */
        $post->update($request->validated());

        /* mesajes de session flash solo  duran una peticion */
        // session()->flash('status', 'Element update');

        /* tambien se pueden mandar mesajes flash con el metodo with */
        return to_route('posts.show', $post)->with('status', 'Elemento actualizado');
    }

    public function destroy(Post $post) {

        $post->delete();

        return to_route('posts.index')->with('status', 'Elemento eliminado correctamente');
    }



}


