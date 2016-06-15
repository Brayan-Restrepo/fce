
<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">Tabla de Modalidades</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal">
		<div class="row">
			@if( Auth::user()->type == 'Admin' )
			{!! Form::open(['route' => 'admin.modalidad.store', 'method'=>'POST', 'class'=>'']) !!}
				<div class="col-lg-12" style='padding-bottom: 5px;'>	        
			        {!! Form::label('moalidad', 'Ingrese una nueva Modalidad', ['class'=>'']) !!}
			        {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>"Ingrese una nueva Modalidad"]) !!}
			    </div>
			    <div class="col-lg-3 col-lg-offset-9">
			    	<button type="submit" class="btn btn-success">Añadir</button>
			    </div>
			{!! Form::close() !!}
			@endif
		</div>
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
