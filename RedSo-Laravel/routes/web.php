<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\PerfilController;

// ------------------------------RUTA PANEL ADMIN
// ------------------------------RUTA PANEL ADMIN
// Route::group(['middleware' => 'admin'], function () {
    // Route::get('/admin', "AdminController@index")
// });
// ------------------------------RUTA PANEL ADMIN
// ------------------------------RUTA PANEL ADMIN


Route::get('/', "HomeController@index"); 
#Route::post('/comentar', 'homeController@comentar');

Route::get("perfil", "PerfilController@perfil"); 

Route::get('/busquedaUser','perfilController@mostrarBusqueda'); 
Route::post('/busquedaUser', 'perfilController@buscarUsuario');  

Route::get('/seguidores','perfilController@mostrarSeguidores');
Route::get('/users/{id}','perfilController@mostrarUser');  

Route::get('/seguirUsuario/{id}', 'perfilController@agregarUsuario'); 
Route::get('/dejarUsuario/{id}', 'perfilController@dejarUsuario'); 

Route::post('/eliminarPost','perfilController@borrarPosteo'); 
Route::post('/eliminarComentario','ComentariosController@borrarComentario'); 
Route::post('/hacerAdministrador', 'PerfilController@hacerAdministrador');

Route::get ('/editarPerfil', 'perfilController@editarPerfil');
Route::post ('/editarDatosPerfil', 'PerfilController@editarDatosPerfil');

Route::get("faq", function(){
    return view ("faq");
});

Route::get("logout", "Auth\LoginController@logout");


Route::get('contacto', function () {
    return view('contacto');
}); 

Route::post('contacto', "ContactoController@envio");

Route::get('/home', function(){
    return view('home');
});

Route::get('/comentarios/{post_id}', 'ComentariosController@comentario');
Route::post('/comentarios/{post_id}','ComentariosController@comentar');  

Route::post('/home', 'HomeController@postear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); 

