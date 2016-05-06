<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">Pacientes</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal">
		<div class='col-lg-3'>
			<a class="btn btn-success" href="{{ url('consulta/pacientes')}}">Ver Todo</a>
		</div>
		<div class="col-lg-4 col-lg-offset-5">
			{!! Form::open(['route' => 'consulta.pacientes.index', 'method' => 'GET', 'class' => "navbar-form navbar-left pull-right", 'role' => "buscar" ]) !!}
				<div class="input-group">
					{!! Form::text('buscar', null, ['class' => "form-control", 'placeholder' => "Buscar"]) !!}
	              <span class="input-group-btn">
	                <button type='submit' id='search-btn' class="btn btn-success btn-flat"><i class="fa fa-search"></i></button>
	              </span>
	            </div>
        	{!! Form::close()!!}
		</div>
		<table class='table table-hover'>
		    <tr>
		        <th>Consulta</th>
		        <th>Documento</th>
		        <th>Nombres</th>
		        <th>Apellidos</th>
		        <th>Email</th>
		        <th>Genero</th>
		        <th>Acciones</th>
		    </tr>
		    @foreach ($pacientes as $paciente)
				<tr>
					<td>
						<a class='btn btn-success' href="{{ route('consulta.sintomas.show', $paciente) }}">Nueva</a>
					</td>
					<td>{{ $paciente->identificacion }}</td>
					<td>{{ $paciente->nombres }}</td>
					<td>{{ $paciente->apellidos }}</td>
					<td>{{ $paciente->email }}</td>
					<td>{{ $paciente->genero }}</td>
					<td>
		                <a class='btn btn-success' href="{{ route('consulta.pacientes.edit', $paciente) }}">Editar</a>
		            </td>
		            
				</tr>
		    @endforeach
		</table>
	</div>
</div>	