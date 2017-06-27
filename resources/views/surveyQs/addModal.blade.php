    <div class="modal fade" id="addO{{ $surveyQ->id }}" 
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
                id="favoritesModalLabel">Agregar opción a pregunta</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'surveyOs.store']) !!}
                    <div class="form-group">
                        <label class="control-label" for="o_text">Redacta la opción:</label>
                        <textarea name="o_text" class="form-control" data-error="Please enter description." required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="o_status">Estatus de opción:</label>
                        {!! Form::select('o_status', ['ACTIVA'=>'ACTIVA', 'INACTIVA'=>'INACTIVA'], null, ['class' => 'form-control']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                    <input type="hidden" name="q_id" value="{{ $surveyQ->id }}">
                    <input type="hidden" name="survey_id" value="{{ $survey->id }}">
                    <div class="form-group">
                        <button type="submit" class="btn crud-submit btn-success">Agregar</button>
                    </div>
                </form>
        </div>
        <div class="modal-footer">
            <button type="button" 
            class="btn btn-default" 
            data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>
</div>