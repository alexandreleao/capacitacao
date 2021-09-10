<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Página de capacitação</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/animate.css@^4.0.0/animate.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/quasar@2.0.4/dist/quasar.prod.css" rel="stylesheet" type="text/css">
        @yield('css')
    </head>
    <body>
        
        
        <div id="app">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
</html>
