<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\authenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

//en caso de tener subcarpetas indicar la ruta con un / o con un .
// Route::get('/', function () {
//     //qui se pueden llevar acabo operaciones logicas
//     //se utilza para retornar algo o hacer validaciones
//     return view('welcome');
// });

//en caso de utilizar operaciones logicas hacer de esta manera
//rotas de tipo get
//ruta con nombre es para que los href en vez de buscar la url busquen por el nombre
// Route::view('/', 'welcome')->name('welcome');

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');


Route::post('/blog', [PostController::class, 'store'])->name('posts.store');

/* las rutas que reciben parametros deben estar al ultimo de un create */
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');


// Route::view('/about', 'about')->name('about');
// Route::view('/contact', 'contact')->name('contact');


/* verifica que el usuario este logueado para acceder a la rutas que estan dentro de la funcion */
Route::middleware('auth')->group(function (){

    Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

});

// Route::get('/login', function () {
//     return "this is view login";
// })->name('login');

Route::view('/login', 'auth.login')->name('login');

Route::post('/login', [authenticatedSessionController::class, 'store']);

Route::post('/logout', [authenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('/registro', 'auth.registro')->name('registro');

Route::post('/registro', [RegisteredUserController::class, 'store'])->name('store');



/* ejemplo es lo mismo que lo de arriba */
// Route::resource('blog', PostController::class, [
//     'names'=> 'Posts'
//      'parameters' => ['blog' => 'post']
// ]);

/* IMPORTANTE */
/* primera forma para proteger tus rutas con el metodo middleware redirecciona automaticamente a la vista login,
para ver los metodos del middleware abrir el archivo app/http/kernel */
// Route::view('/contact', 'contact')->name('contact')->middleware('auth');


//otro tipos de rutas
// Route::post();
// Route::patch();
// Route::put();
// Route::delete();
// Route::options();

//para repsonder a diferentes tipo de rutas
// Route::match(['put','patch'], '/', function (){

// });

// Route::any('/', function () {
    /* metodo */
// });
