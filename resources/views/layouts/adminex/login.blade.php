<!DOCTYPE html>
<html lang="pt_BR">
<head>

  @include('partials.head', ['titlePage' => 'Login'])

</head>
<body class="login-body">

  <main class="container" >
    @yield('content')
  </main>


  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
