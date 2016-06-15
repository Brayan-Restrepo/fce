
<div class='box box-primary box-solid'>
	<div class="box-header">
		<h3 class="box-title">Tabla de Estadoss</h3>
		<div class="box-tools pull-right">
			
			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body form-horizontal">
		@if( Auth::user()->type == 'Admin' )
			{!! Form::open(['route' => 'admin.estado.store', 'method'=>'POST', 'class'=>'']) !!}
				<div class="col-lg-12" style='padding-bottom: 5px;'>	        
			        {!! Form::label('estado', 'Ingrese un nuevo Estado', ['class'=>'']) !!}
			        {!! Form::text('estado', null, ['class'=>'form-control', 'placeholder'=>"Ingrese un nuevo Estado"]) !!}
			    </div>
			    <div class="col-lg-3 col-lg-offset-9">
			    	<button type="submit" class="btn btn-success">Añadir</button>
			    </div>
			{!! Form::close() !!}
			@endif
		<table class='table table-hover'>
		    <tr>
		        <th>Codigo</th>
				<th>Estado</th>
		    </tr>
		    @foreach ($estadostg as $estadotg)
				<tr>
					<td>{{ $estadotg->id }}</td>
					<td>{{ $estadotg->estado }}</td>		            
				</tr>
		    @endforeach
		</table>
	</div>
</div>
