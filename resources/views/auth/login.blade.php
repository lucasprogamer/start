@extends('layouts.adminex.login')

@section('content')
  {!! Form::open(['url' => 'login', 'class'=> 'form-signin']) !!}
  {!! csrf_field() !!}

  <header class="form-signin-heading text-center">
    <h1 class="sign-title">Entre agora</h1>
    <img src="{{ asset('/admin/images/login-logo.png' )}}" alt=""/>
  </header>

  <div class="login-wrap">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {!! Form::email('email', old('email'), ['placeholder' => 'email@exemplo.com','class' => 'form-control' ,'autofocus', 'required' ]) !!}

    {!! Form::password('password', ['placeholder' => '*****','class' => 'form-control' ]) !!}

    {{ Form::button('<i class="fa fa-check"></i>', [ 'class'=>'btn btn-lg btn-login btn-block','type'=>'submit' ]) }}

    <div class="registration">
      Ainda não é membro?
      <a class="" href="{{ url('register') }}">
        Registrar
      </a>
    </div>

    <label class="checkbox">
      <span class="pull-left">
        <input type="checkbox" name="remember" value="remember-me" style="position: initial; margin-left: 13px; margin-right: 6px; margin-top: 11px;"> Lembrar-me
      </span>

      <span class="pull-right">
        <a data-toggle="modal"  class="btn btn-link" href="#reset-password">Esqueceu a senha?</a>
      </span>
    </label>

  </div>

  {!! Form::close() !!}

  @include('modals.reset-password')

@endsection
