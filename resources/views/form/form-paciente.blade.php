
	<div class="box box-solid box-primary">
		<div class="box-header">
			<h3 class="box-title">Información Basica</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body form-horizontal">
			<!-- Info Basica -->
			<div class="row">
				<div class='col-lg-6'>				
					<div class="form-group">
				        {!! Form::label('nombres', 'Nombres', ['class'=>'col-lg-3']) !!}
				        <div class='col-lg-9'>
				        {!! Form::text('nombres', null, ['class'=>'form-control', 'placeholder'=>"Nombres"]) !!}
				        </div>
				    </div>
				    <div class="form-group">
				        {!! Form::label('fecha_nacimiento', 'Fecha nacimiento', ['class'=>'col-lg-3']) !!}
				        <div class='col-lg-9'>
				        {!! Form::text('fecha_nacimiento', null, ['class'=>'form-control', 'placeholder'=>"Fecha nacimiento", 'data-inputmask'=>"'alias': 'dd/mm/yyyy'", 'data-mask']) !!}
				        </div>
				    </div>			    
				    <div class="form-group">
				        {!! Form::label('estado_civil', 'Estado civil', ['class'=>'col-lg-3']) !!}
				        <div class='col-lg-9'>
				        {!! Form::select('estado_civil', ['soltero'=>'Soltero','casado'=>'Casado','union libre'=>'Union Libre','divorciado'=>'Divorciado','viudo'=>'Viudo'], null, ['class'=>'form-control', 'placeholder'=>"Estado civil"]) !!}
				        </div>
				    </div>
				</div>
				<div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('apellidos', 'Apellidos', ['class'=>'col-lg-3']) !!}
				        <div class='col-lg-9'>
				        {!! Form::text('apellidos', null, ['class'=>'form-control', 'placeholder'=>"Apellidos"]) !!}
				        </div>
				    </div>
					
				    <div class="form-group">
				        {!! Form::label('genero', 'Genero', ['class'=>'col-lg-3']) !!}
				        <div class='col-lg-9'>
				        {!! Form::select('genero', ['masculino'=>'Masculino', 'femenino'=>'Femenino'], null, ['class'=>'form-control', 'placeholder'=>"Genero"]) !!}
				        </div>
				    </div>

				    <div class="form-group">
				        {!! Form::label('tipo_identificacion', 'Identificacion', ['class'=>'col-lg-3']) !!}
				        <div class='col-lg-3'>
				        	{!! Form::select('tipo_identificacion', ['cc'=>'Cc.', 'tl'=>'Tl.'], null, ['class'=>'form-control', 'placeholder'=>"Tipo de identificacion"]) !!}
				        </div>
				        <div class='col-lg-6'>
				        	{!! Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>"Identificacion"]) !!}
				        </div>
					</div>
				</div>
		    </div>
	    	<!-- Fin Info Basica -->
	    </div>
	</div>

	<div class="box box-solid box-primary collapsed-box">
		<div class="box-header">
			<h3 class="box-title">Datos de Contacto</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class='row'>
				<div class='col-lg-6'> 
					<div class="form-group">
				        {!! Form::label('email', 'Email', ['class'=>'']) !!}
				        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>"email"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('celular', 'Celular', ['class'=>'']) !!}
				        {!! Form::text('celular', null, ['class'=>'form-control', 'placeholder'=>"celular"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('direccion_residencia', 'Direccion residencia', ['class'=>'']) !!}
				        {!! Form::text('direccion_residencia', null, ['class'=>'form-control', 'placeholder'=>"Direccion residencia"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('telefono_residencia', 'Telefono residencia', ['class'=>'']) !!}
				        {!! Form::text('telefono_residencia', null, ['class'=>'form-control', 'placeholder'=>"Telefono residencia"]) !!}
				    </div>
				</div>
				<div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('ocupacion', 'Ocupación', ['class'=>'']) !!}
				        {!! Form::text('ocupacion', null, ['class'=>'form-control', 'placeholder'=>"Ocupación"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('direccion_oficina', 'Direccion oficina', ['class'=>'']) !!}
				        {!! Form::text('direccion_oficina', null, ['class'=>'form-control', 'placeholder'=>"Direccion oficina"]) !!}
				    </div>
					<div class="form-group">
				        {!! Form::label('telefono_oficina', 'Telefono oficina', ['class'=>'']) !!}
				        {!! Form::text('telefono_oficina', null, ['class'=>'form-control', 'placeholder'=>"Telefono oficina"]) !!}
				    </div>
				</div>
			</div>
		</div>
	</div>

	<div class="box box-solid box-primary collapsed-box">
		<div class="box-header">
			<h3 class="box-title">Información Cacompañante</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class='row'>
				<div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('acompanante', 'Acompañante', ['class'=>'']) !!}
				        {!! Form::text('acompanante', null, ['class'=>'form-control', 'placeholder'=>"Acompañante"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('telefono_acompanante', 'Telefono acompanante', ['class'=>'']) !!}
				        {!! Form::text('telefono_acompanante', null, ['class'=>'form-control', 'placeholder'=>"Telefono acompanante"]) !!}
				    </div>
			    </div>
			    <div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('responsable', 'Responsable', ['class'=>'']) !!}
				        {!! Form::text('responsable', null, ['class'=>'form-control', 'placeholder'=>"Responsable"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('telefono_responsable', 'Telefono responsable', ['class'=>'']) !!}
				        {!! Form::text('telefono_responsable', null, ['class'=>'form-control', 'placeholder'=>"Telefono responsable"]) !!}
				    </div>
			    </div>
		    </div>
	    </div>
	</div>

	<div class="box box-solid box-primary collapsed-box">
		<div class="box-header">
			<h3 class="box-title">Otros Datos</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div class="box-body">
			
			<div class="row">
				<div class='col-lg-6'>
					<div class="form-group">
				        {!! Form::label('tipo_vinvulacion', 'Tipo vinvulacion', ['class'=>'']) !!}
				        {!! Form::select('tipo_vinvulacion', ['cotizante'=>'Cotizante','beneficiario'=>'Beneficiario','afiliado'=>'Afiliado','otro'=>'Otro'], null, ['class'=>'form-control', 'placeholder'=>"Tipo vinvulacion"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('aseguramiento', 'Aseguramiento', ['class'=>'']) !!}
				        {!! Form::select('aseguramiento', ['eps'=>'EPS','ars'=>'ARS','vinculado'=>'Vinculado','otro'=>'Otro'], null, ['class'=>'form-control', 'placeholder'=>"Aseguramiento"]) !!}
				    </div>	    
				    <div class="form-group">
				        {!! Form::label('cual_aseguramiento', 'Cual aseguramiento', ['class'=>'']) !!}
				        {!! Form::text('cual_aseguramiento', null, ['class'=>'form-control', 'placeholder'=>"Cual aseguramiento"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('valor_consuta', 'Valor consuta', ['class'=>'']) !!}
				        {!! Form::text('valor_consuta', null, ['class'=>'form-control', 'placeholder'=>"Valor consuta"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('convenio', 'Convenio', ['class'=>'']) !!}
				        {!! Form::select('convenio', ['a'=>'Tipo A','b'=>'Tipo B'], null, ['class'=>'form-control', 'placeholder'=>"convenio"]) !!}

				    </div>
			     </div>
			     <div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('numero_factura', 'Numero factura', ['class'=>'']) !!}
				        {!! Form::text('numero_factura', null, ['class'=>'form-control', 'placeholder'=>"Numero factura"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('no_interno', 'Numero interno', ['class'=>'']) !!}
				        {!! Form::text('no_interno', null, ['class'=>'form-control', 'placeholder'=>"Numero interno"]) !!}
				    </div>
				    <div class="form-group">
				        {!! Form::label('Motivo_consulta', 'motivo consulta', ['class'=>'']) !!}
				        {!! Form::textArea('motivo_consulta', null, ['class'=>'form-control', 'placeholder'=>"Motivo consulta", 'rows'=>3]) !!}
				    </div>
			    </div>
	    	</div>
	    </div>
	</div>

