@extends('layouts.adminex.base')

@section('content')
    <section class="content-header">
        <h1>
            Media
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($media, ['route' => ['media.update', $media->id], 'method' => 'patch']) !!}

                        @include('media.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection



@extends('layouts.adminex.base')

@section('content')
  @section('styles')
    <link rel="stylesheet" href="{{ asset('/admin/css/bootstrap-fileupload.min.css') }}">
  @endsection
  <div class="wrapper">

    <section class="content-header">

    </section>
    <div class="row">
            <div class="col-md-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb panel">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                      <li><a href="{{ route('media.index') }}">Lista</a></li>
                    <li class="active">Media</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>


<section class="panel">
  <header class="panel-heading">
    Media
  </header>
  <div class="panel-body">
    <div>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                  {!! Form::model($media, ['route' => ['media.update', $media->id], 'method' => 'patch']) !!}

                      @include('media.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
 </div>
</div>
</section>

@section('scripts')
<script src="{{ asset('/admin/js/bootstrap-fileupload.min.js') }}"></script>
@endsection

@endsection
