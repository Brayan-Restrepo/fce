@extends('app')

@section('htmlheader_title')
    Estiduantes
@endsection


@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@if(Session::get('tabla')=='Estudiantes')
			@include('table.tabla-estudiantes')
			@elseif(Session::get('tabla')=='Profesores')
			@include('table.tabla-profesores')
			@endif
		</div>
	</div>
</div>
@endsection