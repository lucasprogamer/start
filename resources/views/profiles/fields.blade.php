<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
  {!! Form::label('Thumbnail', 'Thumbnail:') !!}
      <div class="fileupload fileupload-new" data-provides="fileupload">
              <span class="btn btn-default btn-file">
              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Selecionar</span>
              <span class="fileupload-exists"><i class="fa fa-undo"></i> Mudar</span>
              <input type="file" name="thumbnail" class="default" />
              </span>
          <span class="fileupload-preview" style="margin-left:5px;"></span>
          <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
      </div>
</div>
<div class="clearfix"></div>



<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
