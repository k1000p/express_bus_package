<?php

/**
* Controlador ejemplo del tutorial 6 de arielMAX
*/
class EjemploController extends BaseController
{

	function mostrarIndexAction()
	{
		return View::make('hello');
	}

	function mostrarMensajeAction()
	{
		return View::make('mensaje');
	}

	function mostrarNombreAction($nombre)
	{
		//return 'esta es una prueba de: '.$nombre;
		//return View::make('nombre');
		return View::make('nombre')->with('nombre', $nombre);
	}
}