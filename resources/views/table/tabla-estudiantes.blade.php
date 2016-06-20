
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
		        <th>Codigo</th>
				<th>Identificacion</th>				
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Fecha Nacimiento</th>
				<th>Direccion</th>
				<th>Barrio</th>
				<th>Celular</th>
				<th>Emai</th>
				<th>Editar</th>
		    </tr>
		    @foreach ($estudiante as $estudiantes)
				<tr>
					<td>{{ $estudiantes->codigo }}</td>
					<td>{{ $estudiantes->identificacion }}</td>
					<td>{{ $estudiantes->nombre1 }} {{ $estudiantes->nombre2 }}</td>
					<td>{{ $estudiantes->apellido1 }} {{ $estudiantes->apellido2 }}</td>
					<td>{{ $estudiantes->fechaNac }}</td>
					<td>{{ $estudiantes->direccion }}</td>
					<td>{{ $estudiantes->barrio }}</td>
					<td>{{ $estudiantes->celular }}</td>
					<td>{{ $estudiantes->email }}</td>
		            <td>
		                <a class='btn btn-success' href="{{ route('gestionar.estudiante.edit',$estudiantes->id) }}">Editar</a>
		            </td>
				</tr>
		    @endforeach
		</table>
	</div>
</div>
