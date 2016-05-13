@extends('app')

@section('htmlheader_title')
    {{ Session::get('menu') }}
@endsection


@section('main-content')
<div class="container">
	<div class="row">
		
			@if(Session::get('menu')=='Estudiantes')
			<div class="col-md-12">
			@include('table.tabla-estudiantes')
			@elseif(Session::get('menu')=='Profesores')
			<div class="col-md-12">
			@include('table.tabla-profesores')
			@elseif(Session::get('menu')=='Modalidades de grado')
			<div class="col-md-4 col-lg-offset-4">
			@include('table.tabla-modalidades')
			@elseif(Session::get('menu')=='Estados Trabajos de Gados')
			<div class="col-md-5 col-lg-offset-3">
			@include('table.tabla-estadostg')
			@endif
		</div>
	</div>
</div>
@endsection