<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sebastian Gutierrez</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,700,700i|IBM+Plex+Sans:400,400i,700,700i|Volkhov:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div class="page-content">
            @include('_partials.nav-header')
            @yield('body')
        </div>
    </body>
</html>
