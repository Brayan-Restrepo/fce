
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
				<div class="callout callout-danger lead hidden" id='mesaje-clave'>
				    La contraseña no coincide.
				</div>
					@if(Session::get('formulario')=='Estudiante')
						
						@if(Session::get('editar')==True)
							{!! Form::model($estudiante, ['route' => ['gestionar.estudiante.update', $estudiante->id], 'method'=>'PUT', 'class'=>'', 'id'=>'form_estudiante']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.estudiante.store', 'method'=>'POST', 'class'=>'', 'id'=>'form_estudiante']) !!}	
						@endif
							@include('form.form-estudiante')						
					@elseif(Session::get('formulario')=='Profesor')
						@if(Session::get('editar')==True)
							{!! Form::model($profesor, ['route' => ['gestionar.profesor.update', $profesor->id], 'method'=>'PUT', 'class'=>'', 'id'=>'form_profesor']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.profesor.store', 'method'=>'POST', 'class'=>'', 'id'=>'form_profesor']) !!}
						@endif	
							@include('form.form-profesor')
					@elseif(Session::get('formulario')=='Secretaria')
						
						@if(Session::get('editar')==True)
							{!! Form::model($secretaria, ['route' => ['gestionar.secretaria.update', $secretaria->id], 'method'=>'PUT', 'class'=>'', 'id'=>'form_secretaria']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.secretaria.store', 'method'=>'POST', 'class'=>'', 'id'=>'form_secretaria']) !!}	
						@endif
							@include('form.form-secretaria')
					@elseif(Session::get('formulario')=='Trabajo de Grado')
						@if(Session::get('editar')==True)
							{!! Form::model($trabajo_de_grado, ['route' => ['gestionar.trabajo-de-grado.update', $trabajo_de_grado->id], 'method'=>'PUT', 'class'=>'', 'id'=>'form_trabajo_de_grado']) !!}
						@else
							{!! Form::open(['route' => 'gestionar.trabajo-de-grado.store', 'method'=>'POST', 'class'=>'','id'=>'form_trabajo_de_grado']) !!}
						@endif
						@include('form.form-trabajo-de-grado')
					@endif

					<button type="submit" class="btn btn-lg btn-success">Registrar {{ Session::get('formulario') }}</button>

					{!! Form::close() !!}
			</div>
		</div>
	</div>
	@endsection

