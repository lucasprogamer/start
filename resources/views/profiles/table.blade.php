<div class="col-md-12">
  <section class="panel">
      <header class="panel-heading">
          Lista
              <span class="tools pull-right">
                  <a href="javascript:;" class="fa fa-chevron-down"></a>
               </span>
      </header>
      <div class="panel-body">
        <table class="table table-responsive" id="profiles-table">
            <thead>
                <th>Last Name</th>
        <th>Thumbnail</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <td>{!! $profile->last_name !!}</td>
            <td>{!! $profile->thumbnail !!}</td>
            <td>{!! $profile->user_id !!}</td>
                    <td>
                        {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('profiles.show', [$profile->id]) !!}" class='btn btn-default'><i class="fa fa-eye"></i></a>
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
