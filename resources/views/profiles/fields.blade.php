<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
  {!! Form::label('Thumbnail', 'Foto:') !!}
  <div class="form-group last">
      <div class="col-md-9">
          <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">

                  <img src="{{ $profile->getThumbnail() }}" alt="" />

              </div>
              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
              <div>
                     <span class="btn btn-default btn-file">
                     <span class="fileupload-new"><i class="fa fa-paper-clip"></i>Selecionar</span>
                     <span class="fileupload-exists"><i class="fa fa-undo"></i> Mudar</span>
                     <input type="file" name="thumbnail" class="default" />
                     </span>
                  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remover</a>
              </div>
          </div>
          <br/>
      </div>
  </div>
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
