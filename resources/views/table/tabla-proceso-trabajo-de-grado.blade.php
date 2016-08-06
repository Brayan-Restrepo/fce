
<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">{{ Session::get('menu') }}</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal table-responsive">
		<table class='table table-hover'>
		    <tr>
		        <th>ID</th>
				<th>Fecha</th>				
				<th>Titulo</th>
				<th>Modalidad</th>
				<th>Director</th>
				<th>Estudiante1</th>
				<th>Estudiante2</th>
				<th>Jurado1</th>
				<th>Jurado2</th>
				<th>Estado</th>
				<th>Radicado</th>
				<th>Acta de Sustentacion</th>
				<th>Fecha de Sustentacion</th>
		    	@if(Auth::user()->type == 'Admin' || Auth::user()->type == 'Director')
		    	<th>Editar</th>
		    	@endif
		    </tr>
				<tr>
					<td>{{ $trabajoG->id }}</td>
					<td>{{ $trabajoG->fecha }}</td>
					<td>{{ $trabajoG->titulo }}</td>
					<td>{{ $trabajoG->modalidadGrado }}</td>
					<td>{{ $trabajoG->director }}</td>
					<td>{{ $trabajoG->estudiante1 }}</td>
					<td>{{ $trabajoG->estudiante2 }}</td>
					<td>{{ $trabajoG->jurado1 }}</td>
					<td>{{ $trabajoG->jurado2 }}</td>
					<td>{{ $trabajoG->estado }}</td>
					<td>{{ $trabajoG->radicado }}</td>
					<td>{{ $trabajoG->actaSustentacion }}</td>
					<td>{{ $trabajoG->fechaSustentacion }}</td>
					@if(Auth::user()->type == 'Admin' || Auth::user()->type == 'Director')
					<td>
		                <a class='btn btn-success' href="{{ route('gestionar.trabajo-de-grado.edit',$trabajoG->id) }}">Editar</a>
		            </td>
		            @endif		            
				</tr>
		</table>
	</div>
</div>

<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">{{ Session::get('subMenu') }}</h3>
		<div class="box-tools pull-right">
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal">
		{!! Form::open(['route' => 'gestionar.proceso-trabajo-de-grado.store', 'method'=>'POST', 'class'=>'','style'=>"padding-bottom: 20px;"]) !!}

			@include('form.form-acta-de-comite')

			<button type="submit" class="btn btn-lg btn-success">Registrar Acta</button>

		{!! Form::close() !!}
		<?php $i = 0 ?>
		@foreach ($procesoTG as $proceso)
			<?php $i = $i+1 ?>
			@if($i == count($procesoTG))
				<div class="well col-lg-12">
					<p>{{ $proceso->decision }}</p>
					{!! Form::model($proceso, ['route' => ['gestionar.proceso-trabajo-de-grado.update', $proceso->id], 'method'=>'PUT', 'class'=>'']) !!}					
						@include('form.form-editar-acta-comite')
						<div class="col-lg-2 col-lg-offset-10">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalComite">
	  						Editar
							</button>
						</div>
					{!! Form::close() !!}
				</div>
			@else
				<div class="well">
					<span class="label label-success pull-right">
						{{ $proceso->updated_at->format('d/m/Y') }}
					</span>
					<p>{{ $proceso->decision }}</p>
				</div>
			@endif
		@endforeach
		<!-- Button trigger modal -->



	</div>
</div>