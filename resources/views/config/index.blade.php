@extends('layouts.adminex.base')
@section('title', 'Configurações')
@section('content')
  <div class="wrapper">

      <section class="content-header">

      </section>
      <div class="row">
              <div class="col-md-12">
                  <!--breadcrumbs start -->
                  <ul class="breadcrumb panel">
                      <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                      <li class="active">Configurções</li>
                  </ul>
                  <!--breadcrumbs end -->
              </div>
          </div>


  <section class="panel">
    <header class="panel-heading">
      Geral
    </header>
      <div class="panel-body">
       <div class="content">
           @include('adminlte-templates::common.errors')
           <div class="box box-primary">
               <div class="box-body">
                   <div class="row">
                       {!! Form::model($config, ['route' => ['config.store'], 'method' => 'patch', 'files' => 'true']) !!}

                            @include('config.general')

                       {!! Form::close() !!}
                   </div>
               </div>
           </div>
       </div>
     </div>
  </section>
</div>



@endsection
