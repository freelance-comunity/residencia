        <div class="col-md-12">
        	<div class="box box-primary">
        		<div class="box-header with-border">
        			<h3 class="box-title">Redactar Nuevo Mensaje</h3>
        		</div>
        		<!-- /.box-header -->
        		<div class="box-body">
        			<div class="form-group">
        				{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Asunto: ']) !!}
        			</div>
        			<div class="form-group">
        			{!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Redacta el mensaje...']) !!}
        			</div>
        			<div class="form-group">
        				<div class="btn btn-default btn-file">
        					<i class="fa fa-paperclip"></i> Agregar archivo
        					<input type="file" name="file">
        				</div>
        				<p class="help-block">Max. 32MB</p>
        			</div>
        		</div>
        		<!-- /.box-body -->
        		<div class="box-footer">
        			<div class="pull-right">
        				<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Guardar</button>
        			</div>
        		</div>
        		<!-- /.box-footer -->
        	</div>
        	<!-- /. box -->
        </div>
        <!-- /.col -->
