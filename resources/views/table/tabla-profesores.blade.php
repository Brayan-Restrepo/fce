
<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">{{ Session::get('menu') }}</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal table-responsive">
		<table id="tabla-docente" class='table table-bordered table-striped'>
		    <thead>
		    <tr>
		        <th>ID</th>
				<th>Identificacion</th>				
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Email</th>
				<th>Celular</th>
				<th>Fecha Nacimiento</th>
				<th>Pregrado</th>
				<th>Especializacion</th>
				<th>Maestria</th>
				<th>Doctorado</th>
				<th>Programa</th>
				<th>Editar</th>
		    </tr>
		    </thead>
		    <tbody>
		    @foreach ($profesores as $profesor)
				<tr>
					<td>{{ $profesor->id }}</td>
					<td>{{ $profesor->identificacion }}</td>
					<td>{{ $profesor->nombre1 }} {{ $profesor->nombre2 }}</td>
					<td>{{ $profesor->apellido1 }} {{ $profesor->apellido2 }}</td>
					<td>{{ $profesor->email }}</td>
					<td>{{ $profesor->celular }}</td>
					<td>{{ $profesor->fechaNac }}</td>
					<td>{{ $profesor->pregrado }}</td>
					<td>{{ $profesor->especializacion }}</td>
					<td>{{ $profesor->maestria }}</td>
					<td>{{ $profesor->doctorado }}</td>
					<td>{{ $profesor->programa->nombre }}</td>
		            <td>
		                <a class='btn btn-success' href="{{ route('gestionar.profesor.edit',$profesor->id) }}">Editar</a>
		            </td>
				</tr>
		    @endforeach
		    </tbody>
		</table>
	</div>
</div>	