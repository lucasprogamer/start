<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="reset-password" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

          <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Esqueceu a Senha?</h4>
            </div>
            <div class="modal-body">
              @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
                <p>Insira seu email para recuperar sua senha.</p>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

          </form>

        </div>
    </div>
</div>
