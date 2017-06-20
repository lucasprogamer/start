<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $media->id !!}</p>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $media->name !!}</p>
</div>


<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{!! $media->url !!}</p>
</div>


<!-- Thumbnail Field -->
<div class="form-group">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    <p>{!! $media->thumbnail !!}</p>
</div>


<!-- Thumbnail Id Field -->
<div class="form-group">
    {!! Form::label('thumbnail_id', 'Thumbnail Id:') !!}
    <p>{!! $media->thumbnail_id !!}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $media->created_at !!}</p>
</div>


<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $media->updated_at !!}</p>
</div>


