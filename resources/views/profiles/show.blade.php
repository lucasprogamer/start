@extends('layouts.adminex.base')

@section('title', 'Perfil')
@section('content')
  <!--body wrapper start-->

  <div class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb panel">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="active">Perfil</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>
      <div class="row">
          <div class="col-md-4">
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel">
                          <div class="panel-body">
                              <div class="profile-pic text-center">
                                  <img alt="" src="{{  Auth::user()->getThumbnail() }}">
                                  @if ($profile->user->id == Auth::user()->id)
                                    <div class="form-group">
                                      <a class="btn btn-" href="{{ route('profiles.edit', [$profile->id]) }}">Editar Perfil</a>
                                    </div>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="panel">
                          <div class="panel-body">
                              <ul class="p-info">
                                  <li>
                                      <div class="title">Sexo</div>
                                      <div class="desk">{{ $profile->gender }}</div>
                                  </li>
                                  <li>
                                      <div class="title">Empresa</div>
                                      <div class="desk">{{ $profile->company }}</div>
                                  </li>
                                  <li>
                                      <div class="title">Escolaridade</div>
                                      <div class="desk">{{ $profile->education }}</div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-8">
              <div class="row">
                  <div class="col-md-12">
                      <div class="panel">
                          <div class="panel-body">
                              <div class="profile-desk">
                                  <h1>{{ $profile->name }} {{  $profile->last_name }}</h1>
                                  <h5><a style="pointer-events: none;cursor: default;"> @ {{ $profile->user->name }}</a></h5>
                                  <span class="designation">{{ $profile->designation }}</span>
                                  <p>
                                    {{ $profile->about }}
                                  </p>
                                  <ul class="p-social-link pull-right">
                                    @if (isset($profile->facebook))
                                      <li class="active">
                                          <a href="{{ $profile->facebook }}">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                    @endif
                                    @if (isset($profile->twitter))
                                      <li class="active">
                                          <a href="{{ $profile->twitter }}">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                    @endif
                                    @if (isset($profile->twitter))
                                      <li class="active">
                                          <a href="{{ $profile->github }}">
                                              <i class="fa fa-github"></i>
                                          </a>
                                      </li>
                                    @endif
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
  <!--body wrapper end-->
@endsection
