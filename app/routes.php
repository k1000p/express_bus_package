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


Route::get('/', 'EjemploControlador@MostrarIndexAction');

//Route::get('mensaje', 'EjemploControlador@MostrarMensaje');

Route::any("mensaje", [
  		"as" => "ejemplo/mostrarMensaje",
		"uses" => "EjemploControlador@MostrarMensajeAction"
]);

Route::get('nombre/{nombre}','EjemploControlador@MostrarNombreAction');

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