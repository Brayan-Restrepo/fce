	

fechaNac
direccion
barrio
celular
email
	

	<div class="box box-solid box-primary">
		<div class="box-header">
			<h3 class="box-title">Estudiante</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<!-- Info Basica -->
			<div class="row">
				<div class='col-lg-6'>				
					<div class="form-group">
				        {!! Form::label('codigo', 'Codigo', ['class'=>'']) !!}
				        {!! Form::text('codigo', null, ['class'=>'form-control', 'placeholder'=>"Codigo"]) !!}
				        
				    </div>			    
				    <div class="form-group">
				        {!! Form::label('identificacion', 'Identificacion', ['class'=>'']) !!}
				        {!! Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>"Identificacion"]) !!}
				        
				    </div>
				</div>
				<div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('primer-nombre', 'Primer Nombre', ['class'=>'']) !!}		
				        {!! Form::text('primer-nombre', null, ['class'=>'form-control', 'placeholder'=>"Primer Nombre"]) !!}
				        
				    </div>
				    <div class="form-group">
				        {!! Form::label('segundo-nombre', 'Segundo Nombre', ['class'=>'']) !!}    
				        {!! Form::text('segundo-nombre', null, ['class'=>'form-control', 'placeholder'=>"Segundo Nombre"]) !!}
				    </div>
				</div>
				<div class='col-lg-6'>
				    <div class="form-group">
				        {!! Form::label('primer-apellido', 'Primer Apellido', ['class'=>'']) !!}		
				        {!! Form::text('primer-apellido', null, ['class'=>'form-control', 'placeholder'=>"Primer Apellido"]) !!}
				        
				    </div>
				    <div class="form-group">
				        {!! Form::label('segundo-apellido', 'Segundo Apellido', ['class'=>'']) !!}    
				        {!! Form::text('segundo-apellido', null, ['class'=>'form-control', 'placeholder'=>"Segundo Apellido"]) !!}
				    </div>
				</div>
		    </div>
	    	<!-- Fin Info Basica -->
	    </div>
	</div>








