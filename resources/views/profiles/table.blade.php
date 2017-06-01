<div class="col-md-12">
  <section class="panel">
      <header class="panel-heading">
          Lista
              <span class="tools pull-right">
                  <a href="javascript:;" class="fa fa-chevron-down"></a>
               </span>
      </header>
      <div class="panel-body">
          <table class="table table-hover table-responsive">
              <thead>
              <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th  colspan="3">Ações</th>
              </tr>
              </thead>
              <tbody>
          @foreach($profiles as $profile)
              <tr>
                  <td>{!! $profile->id !!}</td>
                  <td>{!! $profile->text !!}</td>
                  <td>
                    {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                      <div class='btn-group'>
                          <a href="{!! route('profiles.show', [$profile->id]) !!}" class='btn btn-primary'><i class="fa fa-eye"></i></a>
                          <a href="{!! route('profiles.edit', [$profile->id]) !!}" class='btn btn-default'><i class="fa fa-edit"></i></a>
                          {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Tem Certeza?')"]) !!}
                      </div>
                    {!! Form::close() !!}
                  </td>
              </tr>
            @endforeach
              </tbody>
          </table>
      </div>
  </section>
</div>
