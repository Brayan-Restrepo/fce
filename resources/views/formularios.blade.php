@if ( Auth::user()->type != 'Estudiante' && Auth::user()->type != 'Docente')
	@extends('app')

	@section('htmlheader_title')
	    {{ Session::get('menu') }}
	@endsection


	@section('main-content')
	<div class="container">
		<div class="row">
		{{ Session::get('type') }}	
		@if ($errors->any())
		    <div class="alert alert-danger" role="alert">
		        <p>Por favor corrige los errores:</p>
		        <lu>
		            @foreach($errors->all() as $error)
		                <li>{{$error}}</li>
		            @endforeach
		        </lu>
		    </div>
		@endif

			<div class="col-md-10 col-md-offset-1">
					@if(Session::get('formulario')=='Estudiante')
						
						@if(Session::get('editar')==True)
							{!! Form::model($estudiante, ['route' => ['gestionar.estudiante.update', $estudiante->id], 'method'=>'PUT', 'class'=>'']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.estudiante.store', 'method'=>'POST', 'class'=>'']) !!}	
						@endif
							@include('form.form-estudiante')						
					@elseif(Session::get('formulario')=='Profesor')
						@if(Session::get('editar')==True)
							{!! Form::model($profesor, ['route' => ['gestionar.profesor.update', $profesor->celular], 'method'=>'PUT', 'class'=>'']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.profesor.store', 'method'=>'POST', 'class'=>'']) !!}
						@endif	
							@include('form.form-profesor')
					@elseif(Session::get('formulario')=='Trabajo de Grado')
						@if(Session::get('editar')==True)
							{!! Form::model($trabajo_de_grado, ['route' => ['gestionar.trabajo-de-grado.update', $trabajo_de_grado->id], 'method'=>'PUT', 'class'=>'']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.trabajo-de-grado.store', 'method'=>'POST', 'class'=>'']) !!}
						@endif
						@include('form.form-trabajo-de-grado')	
					@endif

					<button type="submit" class="btn btn-lg btn-success">Registrar {{ Session::get('formulario') }}</button>

					{!! Form::close() !!}
			</div>
		</div>
	</div>
	@endsection
@endif
