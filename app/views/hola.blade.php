@extends('layouts.master')

@section('titulo')
	Nuevo titulo desde la plantilla hola
@stop

@section('cabecera')
	@parent
	<link rel="stylesheet" type="css" href="estilo2.css">
@stop
@section('contenido')
	Esto es un contenido desde la plantilla hola
@stop

@section('pie')
	Este es el pie de la página desde la plantilla hola
@stop