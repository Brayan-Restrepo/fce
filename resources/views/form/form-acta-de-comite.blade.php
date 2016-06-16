<!-- Info Basica -->
	<div class="row">
		<div class='col-lg-12' style="padding-bottom: 10px;">	    
		        {!! Form::label('decision', 'Acta de Comite', ['class'=>'']) !!}
		        {!! Form::textArea('decision', null, ['class'=>'form-control', 'placeholder'=>"Ingrese aqui la Acta del Comite", 'rows'=>3]) !!}
		        {!! Form::text('trabajosGrado_id', $trabajoG->id, ['class'=>'hidden']) !!}
		</div>
    </div>
<!-- Fin Info Basica -->