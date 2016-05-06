@extends('app')

@section('htmlheader_title')
    
    
@endsection


@section('main-content')
<div class="container">
	<div class="row">

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
				
					{!! Form::open(['route' => 'gestionar.estudiante.store', 'method'=>'POST', 'class'=>'']) !!}	
						@include('form.form-estudiante')
						<button type="submit" class="btn btn-lg btn-success">Registrar Estudiante</button>

					{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
