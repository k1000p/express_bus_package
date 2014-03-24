<?php


/**
* Clase ejemplo en el curso de ArielMax
*/
class EjemploControlador extends BaseController
{

	public function MostrarIndexAction(){

		return View::make('hello');

	}


	public function MostrarMensajeAction(){

		return 'esto es un mensaje desde el controlador';
	}


	public function MostrarNombreAction($nombre){

		return 'tu nombre es: '.$nombre;

	}
}