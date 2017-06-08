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
                                  <img alt="" src="{{ asset('images/user-flat.png') }}">
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
                                      <div class="desk">Male</div>
                                  </li>
                                  <li>
                                      <div class="title">Empresa</div>
                                      <div class="desk">ABC Inc.</div>
                                  </li>
                                  <li>
                                      <div class="title">Escolaridade</div>
                                      <div class="desk">BSC. in CSE</div>
                                  </li>
                                  <li>
                                      <div class="title">Project Done</div>
                                      <div class="desk">50+</div>
                                  </li>
                                  <li>
                                      <div class="title">Skills</div>
                                      <div class="desk">HTML, CSS, JavaScript.</div>
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
                                  <h1>{{ $profile->user->name }} {{  $profile->last_name }}</h1>
                                  <span class="designation">PRODUCT DESIGNER (UX / UI / Visual Interaction)</span>
                                  <p>
                                      I have 10 years of experience designing for the web, and specialize in the areas of user interface design, interaction design, visual design and prototyping. I’ve worked with notable startups including Pearl Street Software.
                                  </p>
                                  <ul class="p-social-link pull-right">
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="active">
                                          <a href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-google-plus"></i>
                                          </a>
                                      </li>
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
