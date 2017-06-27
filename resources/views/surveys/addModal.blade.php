    <div class="modal fade" id="addModal" 
    tabindex="-1" role="dialog" 
    aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" 
            data-dismiss="modal" 
            aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" 
            id="favoritesModalLabel">Agregar pregunta a encuesta</h4>
        </div>
        <div class="modal-body">
            <p>
                {!! Form::open(['route' => 'surveyQs.store']) !!}
                    <div class="form-group">
                        <label class="control-label" for="q_format">Formato:</label>
                        {!! Form::select('q_format', ['TEXTO'=>'TEXTO', 'SELECTED'=>'OPCIONES'], null, ['class' => 'form-control']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="q_text">Redacta la pregunta:</label>
                        <textarea name="q_text" class="form-control" data-error="Please enter description." required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="q_status">Estatus de pregunta:</label>
                        {!! Form::select('q_status', ['ACTIVA'=>'ACTIVA', 'INACTIVA'=>'INACTIVA'], null, ['class' => 'form-control']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                    <input type="hidden" name="q_createdby" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                    <div class="form-group">
                        <button type="submit" class="btn crud-submit btn-success">Agregar</button>
                    </div>
                </form>
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" 
            class="btn btn-default" 
            data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>
</div>