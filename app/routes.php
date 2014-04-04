	<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});*/

/*Route::get('/', array('before' => 'cumple',
		function(){
		return View::make('hello');
	}
)); */

//Route::get('/', 'EjemploController@mostrarIndexAction');
Route::get('/', [
		'as'=> 'Ejemplo/mostrarIndex',
		'uses' => 'EjemploController@mostrarIndexAction'
]);

//Route::get('mensaje', 'EjemploControlador@MostrarMensaje');

Route::any('mensaje', [
  		'as' => 'Ejemplo/mostrarMensaje',
		'uses' => 'EjemploController@mostrarMensajeAction'
]);



Route::get('plantilla', [
  		'as' => 'Ejemplo/mostrarPlantillaHola',
		'uses' => 'EjemploController@mostrarPlantillaHolaAction'
]);



Route::get('nombre/{nombre}', [
		'as' => 'Ejemplo/mostrarNombre',
		'uses' => 'EjemploController@MostrarNombreAction'
	]);



//Route::get('nombre/{nombre}','EjemploControlador@MostrarNombreAction');

Route::get('registro', function(){
		echo Form::open(array('url' => 'nombre', 'method' => 'post'));
		echo Form::label('nombre', 'Tu nombre:  ');
		echo Form::text('nom');
		echo Form::submit('Enviar');
		echo Form::close();
});

Route::post('nombre', function(){
		$nombre = Input::get('nom');
		return 'Tu nombre es:  '.$nombre;
});