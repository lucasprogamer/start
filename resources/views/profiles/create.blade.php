@extends('layouts.adminex.base')
@section('styles')
  <link rel="stylesheet" href="{{ asset('/admin/css/bootstrap-fileupload.min.css') }}">
@endsection

@section('content')
  <div class="wrapper">

    <section class="content-header">

    </section>
    <div class="row">
            <div class="col-md-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb panel">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{ route('profiles.index') }}">Lista</a></li>
                    <li class="active">Profile</li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>


<section class="panel">
  <header class="panel-heading">
    Profile
  </header>
  <div class="panel-body">
    <div>
      <div class="content">
          @include('adminlte-templates::common.errors')
          <div class="box box-primary">

              <div class="box-body">
                  <div class="row">
                      {!! Form::open(['route' => 'profiles.store']) !!}

                          @include('profiles.fields')

                      {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</section>


@endsection
@section('scripts')
  <script src="{{ asset('/admin/js/bootstrap-fileupload.min.js') }}"></script>
@endsection
