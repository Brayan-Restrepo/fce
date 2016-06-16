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
					<div class='form-group col-lg-12' style="padding-left: 0px;">
				        {!! Form::label('titulo', 'Titulo', ['class'=>'']) !!}
				        {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>"Titulo"]) !!}
				    </div>
				    <div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('jurado1', 'Primer Jurado', ['class'=>'']) !!}
				        {!! Form::select('jurado1',$profesoresArray, null, ['class'=>'form-control','id'=>'jurado1', 'placeholder'=>"Primer Jurado"]) !!}
				        
				    </div>
				    <div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('jurado2', 'Segundo Jurado', ['class'=>'']) !!}    
				        {!! Form::select('jurado2',$profesoresArray, null, ['class'=>'form-control', 'placeholder'=>"Segundo Jurado"]) !!}
				    </div>
				    
				    <div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('director', 'Director', ['class'=>'']) !!}    
				        {!! Form::select('director',$profesoresArray, null, ['class'=>'form-control', 'placeholder'=>"Director"]) !!}
				    </div>
				   				    
				    <div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('estado', 'Estado', ['class'=>'']) !!}    
				        {!! Form::select('estado',$estadosArray, null, ['class'=>'form-control', 'placeholder'=>"Estado"]) !!}
				    </div>
				   
				</div>
				<div class='col-lg-6'>
					<div class='form-group col-lg-6' style="padding-left: 0px;">
				        {!! Form::label('radicado', 'Radicado', ['class'=>'']) !!}
				        {!! Form::text('radicado', null, ['class'=>'form-control', 'placeholder'=>"Radicado"]) !!}
				    </div>
					<div class='form-group col-lg-6' style="padding-left: 0px;">
				        {!! Form::label('fecha', 'Fecha', ['class'=>'']) !!}
				        {!! Form::text('fecha', null, ['class'=>'form-control', 'placeholder'=>"Fecha"]) !!}
				    </div>		
					<div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('estudiante1', 'Primer Estudiante', ['class'=>'']) !!}    
				        {!! Form::select('estudiante1',$estudiantesArray, null, ['class'=>'form-control', 'placeholder'=>"Primer Estudiante"]) !!}
				    </div>
				    <div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('estudiante2', 'Segundo Estudiante', ['class'=>'']) !!}    
				        {!! Form::select('estudiante2',$estudiantesArray, null, ['class'=>'form-control', 'placeholder'=>"Segundo Estudiante"]) !!}
				    </div>
				    <div class="form-group col-lg-12" style="padding-left: 0px;">
				        {!! Form::label('modalidadGrado', 'Modalidad de Grado', ['class'=>'']) !!}
				        {!! Form::select('modalidadGrado',$modalidadesArray, null, ['class'=>'form-control', 'placeholder'=>"Modalidad de Grado"]) !!}        
				    </div>

				     <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('actaSustentacion', 'Acta Sustentacion', ['class'=>'']) !!}    
				        {!! Form::text('actaSustentacion', null, ['class'=>'form-control', 'placeholder'=>"Acta Sustentacion"]) !!}
				    </div>
				    <div class="form-group col-lg-6" style="padding-left: 0px;">
				        {!! Form::label('fechaSustentacion', 'Fecha Sustentacion', ['class'=>'']) !!}    
				        {!! Form::text('fechaSustentacion', null, ['class'=>'form-control', 'placeholder'=>"Fecha Sustentacion"]) !!}
				    </div>
				</div>
		    </div>
	    	<!-- Fin Info Basica -->
	    </div>
	</div>
