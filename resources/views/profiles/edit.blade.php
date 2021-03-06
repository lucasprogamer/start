@extends('layouts.adminex.base')
@section('title', 'Editar Perfil')
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
                      <li><a href="{{ route('profiles.show',[$profile->id]) }}">Perfil</a></li>
                      <li class="active">Editar</li>
                  </ul>
                  <!--breadcrumbs end -->
              </div>
          </div>


  <section class="panel">
    <header class="panel-heading">
      Perfil
    </header>
      <div class="panel-body">
       <div class="content">
           @include('adminlte-templates::common.errors')
           <div class="box box-primary">
               <div class="box-body">
                   <div class="row">
                       {!! Form::model($profile, ['route' => ['profiles.update', $profile->id], 'method' => 'patch', 'files' => 'true']) !!}

                            @include('profiles.fields')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
     </div>
  </section>
</div>

@section('scripts')
<script src="{{ asset('/admin/js/bootstrap-fileupload.min.js') }}"></script>
@endsection

@endsection
