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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','UsersController@login');
Route::get('/home','NombrevotosController@show');

Route::match(['get', 'post'], '/admin','AdminController@login');
Route::match(['get', 'post'], '/index','UsersController@login');
Route::get('/pantalla','VotosController@pantalla');
Auth::routes();
// user//

Route::get('user/dashboard','UsersController@dashboard');
Route::resource('user/votos/index','VotosController');


Route::get('/user/settings','UsersController@settings');
Route::match(['get','post'],'/user/update-pwd','UsersController@updatePassword');

	

///
Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');	
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
	Route::match(['get','post'],'/admin/create','AdminController@create');

	Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

	// Categories Routes (Admin)
	
	
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/votos', 'NombrevotosController@namevotos');
	// Products Routes
	Route::match(['get','post'],'/admin/add-votos','NombrevotosController@store');
	 Route::get('/admin/votos/all','NombrevotosController@show');

	//NombreVotosController
	Route::resource('admin/nombre_votos', 'NombrevotosController');
	//habilitar y deshabilitar


Route::post('/admin/votos/all/{id}/deshabilitar','NombrevotosController@deshabilitar');
Route::post('/admin/votos/all/{id}/habilitar','NombrevotosController@habilitar');
});

Route::post('insertarvoto','VotosController@create');
Route::get('/logout','AdminController@logout');
Route::get('/user/logout','UsersController@logout');

