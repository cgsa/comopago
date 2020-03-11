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
/*
Route::get('test', function () {
    $user = new App\User;
    $user->name = "Dabeidi";
    $user->lastname = "Bermudez";
    $user->email = "ddbermudez90@gmail.com";
    $user->password = bcrypt("admin01");
    $user->state = 1;
    $user->save();
    
   return $user;
    
});*/


/*Route::get('/', function () {
    return view('welcome');
});


DB::listen(function($query)
{
    echo "<pre>{$query->sql}</pre>";
});*/


Route::get('/',['as'=>'index','uses'=>'SiteController@index']);

Route::get('/administrador',['as'=>'site.vista','uses'=>'SiteController@vista']);

Route::get('/site/help',['as'=>'site.help','uses'=>'SiteController@help']);

Route::get('/administrador/login',['as'=>'login','uses'=>'Auth\LoginController@ShowLoginForm']);

Route::post('/administrador/login','Auth\LoginController@login');

Route::get('/administrador/logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);


/**
 * Start Roles
 * Rutas para el controlador de Roles
 * */
Route::get('/administrador/roles/assigned/{role}',['as'=>'roles.assigned', 'uses'=>'RoleController@assigned' ]);

Route::put('/administrador/roles/register/{role}',['as'=>'roles.register', 'uses'=>'RoleController@register' ]);

Route::resource('/administrador/roles','RoleController');

Route::resource('/administrador/items','ItemController');


/**
 * Start User
 * Rutas para el controlador de Usuarios
 * */
Route::get('/administrador/usuarios/profile',['as'=>'usuarios.profile','uses'=>'UsersController@profile']);

Route::get('/administrador/usuarios/profile',['as'=>'usuarios.profile','uses'=>'UsersController@profile']);

Route::get('/administrador/usuarios/changepassword',['as'=>'usuarios.changepassword','uses'=>'UsersController@changepass']);

Route::get('/administrador/usuarios/logs',['as'=>'usuarios.log','uses'=>'UsersController@log']);

Route::get('/administrador/usuarios/changepassworduser/{user}',['as'=>'usuarios.changepassworduser','uses'=>'UsersController@changePassUser']);

Route::put('/administrador/usuarios/updatepass/{user}',['as'=>'usuarios.updatepass','uses'=>'UsersController@updatepassword']);

Route::resource('/administrador/usuarios','UsersController');


/**
 * Start Banners
 * Rutas para el controlador de Banners
 * */
Route::get('banners/index', ['as'=>'banners.index', 'uses'=>'BannerController@index']);

Route::get('banners/create/', ['as'=>'banners.create', 'uses'=>'BannerController@create']);

Route::post('banners/store/', ['as'=>'banners.store', 'uses'=>'BannerController@store']);

Route::get('banners/edit/{id}', ['as'=>'banners.edit', 'uses'=>'BannerController@edit']);

Route::put('banners/update/{id}', ['as'=>'banners.update', 'uses'=>'BannerController@update']);

Route::get('banners/pre-view/{id}', ['as'=>'banners.view', 'uses'=>'BannerController@show']);

Route::get('banners/view/{id}', ['as'=>'banners.view2', 'uses'=>'BannerController@view']);


/**
 * Start PreguntasFrecuentes
 * Rutas para el controlador de PreguntasFrecuentes
 * */
Route::get('preguntafrecuente/index', ['as'=>'preguntas.index', 'uses'=>'PreguntaFrecuenteController@index']);

Route::get('preguntafrecuente/create/', ['as'=>'preguntas.create', 'uses'=>'PreguntaFrecuenteController@create']);

Route::post('preguntafrecuente/store/', ['as'=>'preguntas.store', 'uses'=>'PreguntaFrecuenteController@store']);

Route::get('preguntafrecuente/edit/{id}', ['as'=>'preguntas.edit', 'uses'=>'PreguntaFrecuenteController@edit']);

Route::put('preguntafrecuente/update/{id}', ['as'=>'preguntas.update', 'uses'=>'PreguntaFrecuenteController@update']);

Route::get('preguntafrecuente/view/{id}', ['as'=>'preguntas.view', 'uses'=>'PreguntaFrecuenteController@view']);

Route::delete('preguntafrecuente/delete/{id}', ['as'=>'preguntas.delete', 'uses'=>'PreguntaFrecuenteController@destroy']);

/**
 * Start Testimonios
 * Rutas para el controlador de PreguntasFrecuentes
 * */
Route::get('testimonio/index', ['as'=>'testimonios.index', 'uses'=>'TestimonioController@index']);

Route::get('testimonio/create/', ['as'=>'testimonios.create', 'uses'=>'TestimonioController@create']);

Route::post('testimonio/store/', ['as'=>'testimonios.store', 'uses'=>'TestimonioController@store']);

Route::get('testimonio/edit/{id}', ['as'=>'testimonios.edit', 'uses'=>'TestimonioController@edit']);

Route::put('testimonio/update/{id}', ['as'=>'testimonios.update', 'uses'=>'TestimonioController@update']);

Route::get('testimonio/view/{id}', ['as'=>'testimonios.view', 'uses'=>'TestimonioController@view']);

Route::delete('testimonio/delete/{id}', ['as'=>'testimonio.delete', 'uses'=>'TestimonioController@destroy']);



/**
 * Start Clientes
 * Rutas para el controlador de PreguntasFrecuentes
 * */
Route::get('cliente/index', ['as'=>'clientes.index', 'uses'=>'ClienteController@index']);

Route::get('cliente/create/', ['as'=>'clientes.create', 'uses'=>'ClienteController@create']);

Route::post('cliente/store/', ['as'=>'clientes.store', 'uses'=>'ClienteController@store']);

Route::put('cliente/update/{id}', ['as'=>'clientes.update', 'uses'=>'ClienteController@update']);

Route::get('cliente/edit/{id}', ['as'=>'clientes.edit', 'uses'=>'ClienteController@edit']);

Route::get('cliente/view/{id}', ['as'=>'clientes.view', 'uses'=>'ClienteController@show']);

Route::delete('cliente/delete/{id}', ['as'=>'clientes.delete', 'uses'=>'ClienteController@destroy']);



