@extends('layouts.adminex.login')

@section('content')

  {!! Form::open(['url' => 'register', 'class'=> 'form-signin']) !!}
  {!! csrf_field() !!}

  <header class="form-signin-heading text-center">
    <h1 class="sign-title">Registrar</h1>
    <img src="{{ asset('images/login-logo.png' )}}" alt=""/>
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

    {!! Form::text('name',  old('name'),['placeholder' => 'Usuario','class' => 'form-control' ,'autofocus' ]) !!}

    {!! Form::text('nome',  old('name'),['placeholder' => 'Nome','class' => 'form-control' ,'autofocus' ]) !!}


    {!! Form::email('email', old('email'),[ 'placeholder' => 'E-mail', 'class' => 'form-control' ,        'autofocus'
      ]) !!}

    {!! Form::password('password', ['placeholder' => 'Senha', 'class' => 'form-control'  ]) !!}

    {!! Form::password('password_confirmation', ['placeholder' => 'Confirmar senha','class' => 'form-control' ]) !!}

    {{ Form::button('<i class="fa fa-check"></i>', ['class'=>'btn btn-lg btn-login btn-block','type'=>'submit' ]) }}

    <div class="registration">
      Possui uma Conta?
        <a href="{{ route('login') }}" class="">
            Login
        </a>
    </div>

  </div>



  {!! Form::close() !!}

@endsection
