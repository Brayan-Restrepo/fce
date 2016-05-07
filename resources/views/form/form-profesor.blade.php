
	<div class="box box-solid box-primary">
		<div class="box-header">
			<h3 class="box-title">Agregar Profesor</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<!-- Info Basica -->
			<div class="row">
				<div class='col-lg-6'>
				   	<div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('id', 'Codigo', ['class'=>'']) !!}
				        {!! Form::text('id', null, ['class'=>'form-control', 'placeholder'=>"Codigo"]) !!}
				    </div>			    
				    <div class="form-group col-lg-6" style='padding-left: 0px;'>
				        {!! Form::label('identificacion', 'Identificacion', ['class'=>'']) !!}
				        {!! Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>"Identificacion"]) !!}
				    </div>
				    
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('pregrado', 'Pregrado', ['class'=>'']) !!}    
				        {!! Form::text('pregrado', null, ['class'=>'form-control', 'placeholder'=>"Pregrado"]) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('especializacion', 'Especializacion', ['class'=>'']) !!}
				        {!! Form::text('especializacion', null, ['class'=>'form-control', 'placeholder'=>"Especializacion"]) !!}
				        
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('maestria', 'Maestria', ['class'=>'']) !!}    
				        {!! Form::text('maestria', null, ['class'=>'form-control', 'placeholder'=>"Maestria"]) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('doctorado', 'Doctorado', ['class'=>'']) !!}    
				        {!! Form::text('doctorado', null, ['class'=>'form-control', 'placeholder'=>"Doctorado"]) !!}
				    </div>
				</div>
				<div class='col-lg-6'>				
					<div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('nombre1', 'Primer Nombre', ['class'=>'']) !!}		
				        {!! Form::text('nombre1', null, ['class'=>'form-control', 'placeholder'=>"Primer Nombre"]) !!}
				        
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('nombre2', 'Segundo Nombre', ['class'=>'']) !!}    
				        {!! Form::text('nombre2', null, ['class'=>'form-control', 'placeholder'=>"Segundo Nombre"]) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('apellido1', 'Primer Apellido', ['class'=>'']) !!}		
				        {!! Form::text('apellido1', null, ['class'=>'form-control', 'placeholder'=>"Primer Apellido"]) !!}
				        
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('apellido2', 'Segundo Apellido', ['class'=>'']) !!}    
				        {!! Form::text('apellido2', null, ['class'=>'form-control', 'placeholder'=>"Segundo Apellido"]) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('fechaNac', 'Fecha de Nacimiento', ['class'=>'']) !!}
				        {!! Form::text('fechaNac', null, ['class'=>'form-control', 'placeholder'=>"Fecha de Nacimiento"]) !!}				        
				    </div>
				</div>
		    </div>
	    	<!-- Fin Info Basica -->
	    </div>
	</div>

