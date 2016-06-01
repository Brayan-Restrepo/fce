@if ( Auth::user()->type != 'Estudiante')
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
						{!! Form::open(['route' => 'gestionar.estudiante.store', 'method'=>'POST', 'class'=>'']) !!}	
							@include('form.form-estudiante')						
					@elseif(Session::get('formulario')=='Profesor')
						{!! Form::open(['route' => 'gestionar.profesor.store', 'method'=>'POST', 'class'=>'']) !!}	
							@include('form.form-profesor')
					@elseif(Session::get('formulario')=='Trabajo de Grado')
						@if(Session::get('editar')==True)
							{!! Form::model($trabajo_de_grado, ['route' => ['gestionar.profesor.update', '1'], 'method'=>'PUT', 'class'=>'']) !!}							
							@include('form.edit-form-trabajo-de-grado')	
						@else
							{!! Form::open(['route' => 'gestionar.trabajo-de-grado.store', 'method'=>'POST', 'class'=>'']) !!}
								@include('form.form-trabajo-de-grado')	
						@endif					
					@endif

					<button type="submit" class="btn btn-lg btn-success">Registrar {{ Session::get('formulario') }}</button>

					{!! Form::close() !!}
			</div>
		</div>
	</div>
	@endsection
@endif
