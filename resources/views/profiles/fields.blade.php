<!-- Thumbnail Field -->
<div class="form-group col-sm-3">
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
<!-- Last Name Field -->
<div class="form-group col-sm-9">
  <h3>Informações de Contato</h3>
  <div class="row">
    <div class="col-sm-6">
      {!! Form::label('name', 'Nome:') !!}
      {!! Form::text('name', $profile->name, ['class' => 'form-control']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('last_name', 'SobreNome:') !!}
      {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('usuario', 'Usuário:') !!}
      {!! Form::text('usuario', $profile->user->username, ['class' => 'form-control Disabled', 'Disabled']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('email', 'Email:') !!}
      {!! Form::text('email', $profile->user->email, ['class' => 'form-control Disabled', 'Disabled']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('phone', 'Telefone:') !!}
      {!! Form::text('phone', null, ['class' => 'form-control phone', 'placeholder' => '(00) 00000-0000']) !!}
    </div>
  </div>
  <br>
  <br>
  <h3>Informações de Adicionais</h3>
  <div class="row">
    <div class="col-sm-12">
      {!! Form::label('gender', 'Genêro:') !!} <br>
      {!! Form::radio('gender', null, ['class' => 'form-control']) !!}
      {!! Form::label('gender', 'Feminino', false) !!}
      {!! Form::radio('gender', null, ['class' => 'form-control']) !!}
      {!! Form::label('gender', 'Masculino', true) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('company', 'Empresa:') !!}
      {!! Form::text('company', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('designation', 'Função:') !!}
      {!! Form::text('designation', null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::label('education', 'Escolaridade:') !!}
      {!!Form::select('education', [
                                    'Nível fundamental incompleto' => 'Nível fundamental incompleto',
                                    'Nível fundamental' => 'Nível fundamental',
                                    'Nível médio incompleto' => 'Nível médio incompleto',
                                    'Nível médio' => 'Nível médio',
                                    'Nível superior' => 'Nível superior incompleto',
                                    'Nível superior' => 'Nível superior',
                                  ], null, ['class'=>'form-control','placeholder' => 'Escolha ....']) !!}
    </div>
  </div>
  <h3>Redes Sociais</h3>
  <div class="row">

    <div class="col-sm-4">
      <div class="iconic-input">
          <i class="fa fa-facebook"></i>
          <input type="text" class="form-control" name="facebook" placeholder="facebook">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="iconic-input">
          <i class="fa fa-github"></i>
          <input type="text" class="form-control" name="github" placeholder="github">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="iconic-input">
          <i class="fa fa-twitter"></i>
          <input type="text" class="form-control" name="twitter" placeholder="twitter">
      </div>
    </div>
</div>
  </div>
</div>


<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('profiles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
