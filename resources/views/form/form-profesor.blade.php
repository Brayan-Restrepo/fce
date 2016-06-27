@if(Auth::user()->type == 'Secretaria')
    {!! Form::text('programa_id', Auth::user()->secretaria->programa_id, ['class'=>'hidden']) !!}
@elseif(Auth::user()->type == 'Secretaria')

@endif
<div class="callout callout-danger lead hidden" id='mesaje-clave'>
    La contraseña no coincide.
</div>
	<div class="box box-solid box-primary">
		<div class="box-header">
			<h3 class="box-title">{{ Session::get('menu') }}</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div>
		</div>
		<div class="box-body">
			<!-- Info Basica -->
			<div class="row">
				<div class='col-lg-6'>	    
				    <div class="form-group col-lg-6" style='padding-left: 0px;'>
				        {!! Form::label('identificacion', 'Identificacion', ['class'=>'']) !!}
				        {!! Form::number('identificacion', null, ['class'=>'form-control', 'placeholder'=>"Identificacion",'required']) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('fechaNac', 'Fecha de Nacimiento', ['class'=>'']) !!}
				        {!! Form::text('fechaNac', null, ['class'=>'form-control', 'placeholder'=>"Fecha de Nacimiento",'required']) !!}        
				    </div>	
				    
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('pregrado', 'Pregrado', ['class'=>'']) !!}    
				        {!! Form::text('pregrado', null, ['class'=>'form-control', 'placeholder'=>"Pregrado",'required']) !!}
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
	    			<div class="form-group col-lg-12" style="padding-left: 0px;">
	    				{!! Form::label('email', 'Email', ['class'=>'']) !!}    
				        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>"Email",'required']) !!}
				    </div>
				    
				</div>
				<div class='col-lg-6'>				
					<div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('nombre1', 'Primer Nombre', ['class'=>'']) !!}		
				        {!! Form::text('nombre1', null, ['class'=>'form-control', 'placeholder'=>"Primer Nombre",'required']) !!}
				        
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('nombre2', 'Segundo Nombre', ['class'=>'']) !!}    
				        {!! Form::text('nombre2', null, ['class'=>'form-control', 'placeholder'=>"Segundo Nombre"]) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('apellido1', 'Primer Apellido', ['class'=>'']) !!}		
				        {!! Form::text('apellido1', null, ['class'=>'form-control', 'placeholder'=>"Primer Apellido",'required']) !!}
				        
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('apellido2', 'Segundo Apellido', ['class'=>'']) !!}    
				        {!! Form::text('apellido2', null, ['class'=>'form-control', 'placeholder'=>"Segundo Apellido",'required']) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('Celular', 'Celular', ['class'=>'']) !!}    
				        {!! Form::text('celular', null, ['class'=>'form-control', 'placeholder'=>"Celular"]) !!}
				    </div>
				    @if(Auth::user()->type == 'Admin')
	    			<div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('programa_id', 'Seleccione un Programa', ['class'=>'']) !!}    
				        {!! Form::select('programa_id',$programasArray, null, ['class'=>'form-control selectpicker show-tick', 'data-live-search'=>'true', 'placeholder'=>"Seleccione un Programa",'required']) !!}
				    </div>
				    @endif
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('password', 'Ingresa una Clave', ['class'=>'']) !!}    
				        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>"Ingresa una Clave",'required', 'minlength'=>'6']) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('password-confirmar', 'Confirmar la Clave', ['class'=>'']) !!}    
				        {!! Form::password('password-confirmar', ['class'=>'form-control', 'placeholder'=>"Confirmar la Clave",'required', 'minlength'=>'6']) !!}
				    </div>
				</div>
		    </div>
	    	<!-- Fin Info Basica -->
	    </div>
	</div>

