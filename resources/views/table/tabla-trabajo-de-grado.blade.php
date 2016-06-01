
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
				<th>Fecha</th>				
				<th>Titulo</th>
				<th>Modalidad</th>
				<th>Director</th>
				<th>Estudiante1</th>
				<th>Estudiante2</th>
				<th>Jurado1</th>
				<th>Jurado2</th>
				<th>Estado</th>
				<th>Acta de Sustentacion</th>
				<th>Fecha de Sustentacion</th>
		    	<th>Editar</th>
		    </tr>
		    @foreach ($trabajo_de_grado as $trabajoG)
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
					<td>{{ $trabajoG->actaSustentacion }}</td>
					<td>{{ $trabajoG->fechaSustentacion }}</td>
					<td>
		                <a class='btn btn-success' href="{{ route('gestionar.trabajo-de-grado.edit',$trabajoG->id) }}">Editar</a>
		            </td>
		            
				</tr>
		    @endforeach
		</table>
	</div>
</div>