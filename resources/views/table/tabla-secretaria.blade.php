 
<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">{{ Session::get('menu') }}</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal">
		<table id="tabla-secretaria" class='table table-bordered table-striped'>
		    <thead>
			    <tr>
			        <th>ID</th>
					<th>Identificacion</th>				
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Celular</th>
					<th>Fecha Nacimiento</th>
					<th>Programa</th>
					<th>Editar</th>
			    </tr>
			</thead>
			<tbody>
		    @foreach ($secretarias as $secretaria)
				<tr>
					<td>{{ $secretaria->id }}</td>
					<td>{{ $secretaria->identificacion }}</td>
					<td>{{ $secretaria->nombre1 }} {{ $secretaria->nombre2 }}</td>
					<td>{{ $secretaria->apellido1 }} {{ $secretaria->apellido2 }}</td>
					<td>{{ $secretaria->celular }}</td>
					<td>{{ $secretaria->fechaNac }}</td>
					<td> {{ $secretaria->programa->nombre }} </td>
		            <td>
		                <a class='btn btn-success' href="{{ route('gestionar.secretaria.edit',$secretaria->id) }}">Editar</a>
		            </td>
				</tr>
		    @endforeach
		    </tbody>
		    <tfoot>
			    <tr>
			        <th>ID</th>
					<th>Identificacion</th>				
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>Celular</th>
					<th>Fecha Nacimiento</th>
					<th>Programa</th>
					<th>Editar</th>
			    </tr>
			</tfoot>
		</table>
	</div>
</div>	