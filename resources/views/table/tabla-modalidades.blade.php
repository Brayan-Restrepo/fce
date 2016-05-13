
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
		        <th>Codigo</th>
				<th>Modalidad</th>
		    </tr>
		    @foreach ($modalidades as $modalidad)
				<tr>
					<td>{{ $modalidad->id }}</td>
					<td>{{ $modalidad->descripcion }}</td>		            
				</tr>
		    @endforeach
		</table>
	</div>
</div>
