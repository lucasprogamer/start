<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('404 Pagina Não encontrada')</title>

    <!-- Styles -->
    <link href="{{ asset('/admin/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="error-page">

<section>
    <div class="container ">

        <section class="error-wrapper text-center">
            <h1><img alt="" src="{{ asset('images/404-error.png') }}"></h1>
            <h2>Pagina Não Encontrada</h2>
            <h3>Algo de errado não esta certo</h3>
            <a class="back-btn" href="{{ route('dashboard') }}"> Volte ao incio</a>
        </section>

    </div>
</section>
    <!-- Scripts -->
    <script src="{{ asset('/admin/js/app.js') }}"></script>
</body>
</html>
