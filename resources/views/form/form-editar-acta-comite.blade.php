<!-- Modal -->
<div class="modal fade" id="modalComite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Acta de Comite</h4>
      </div>
      <div class="modal-body">
          {!! Form::label('decision', 'Acta de Comite', ['class'=>'']) !!}
          {!! Form::textArea('decision', null, ['class'=>'form-control', 'placeholder'=>"Ingrese aqui la Acta del Comite", 'rows'=>3]) !!}
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>