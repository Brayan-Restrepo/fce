
<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">{{ Session::get('menu') }}</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal">
		<table class='table table-hover'>
		    <tr>
		        <th>ID</th>
				<th>Identificacion</th>				
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Fecha Nacimiento</th>
				<th>Pregrado</th>
				<th>Especializacion</th>
				<th>Maestria</th>
				<th>Doctorado</th>
		    </tr>
		    @foreach ($profesores as $profesor)
				<tr>
					<td>{{ $profesor->id }}</td>
					<td>{{ $profesor->identificacion }}</td>
					<td>{{ $profesor->nombre1 }} {{ $profesor->nombre2 }}</td>
					<td>{{ $profesor->apellido1 }} {{ $profesor->apellido2 }}</td>
					<td>{{ $profesor->fechaNac }}</td>
					<td>{{ $profesor->pregrado }}</td>
					<td>{{ $profesor->especializacion }}</td>
					<td>{{ $profesor->maestria }}</td>
					<td>{{ $profesor->doctorado }}</td>
		            
				</tr>
		    @endforeach
		</table>
	</div>
</div>	