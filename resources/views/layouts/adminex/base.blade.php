<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @section('styles')
    @show

</head>
<body id="app" class="sticky-header">
      <section>

        @include('layouts.sidebar')

      <!-- main content start-->
        <div class="main-content" >


          @include('partials.header')
            @include('flash::message')
            @yield('content')





        <footer class="sticky-footer">
            {{date('Y')}} &copy; Start
        </footer>
        <!--footer section end-->


    </div>

</section>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @section('scripts')
    @show

</body>
</html>
