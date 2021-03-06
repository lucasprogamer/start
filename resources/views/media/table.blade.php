<div class="col-md-12">
  <section class="panel">
      <header class="panel-heading">
          Lista
              <span class="tools pull-right">
                  <a href="javascript:;" class="fa fa-chevron-down"></a>
               </span>
      </header>
      <div class="panel-body">
        <table class="table table-responsive" id="media-table">
            <thead>
                <th>Name</th>
        <th>Url</th>
        <th>Thumbnail</th>
        <th>Thumbnail Id</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody>
            @foreach($media as $media)
                <tr>
                    <td>{!! $media->name !!}</td>
            <td>{!! $media->url !!}</td>
            <td>{!! $media->thumbnail !!}</td>
            <td>{!! $media->thumbnail_id !!}</td>
                    <td>
                        {!! Form::open(['route' => ['media.destroy', $media->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('media.show', [$media->id]) !!}" class='btn btn-default'><i class="fa fa-eye"></i></a>
                            <a href="{!! route('media.edit', [$media->id]) !!}" class='btn btn-default'><i class="fa fa-edit"></i></a>
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
