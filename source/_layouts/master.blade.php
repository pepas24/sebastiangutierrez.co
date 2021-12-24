<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
        <meta name="description" content="{{ $page->excerpt ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->excerpt ?? $page->siteDescription }}" />

        <link rel="home" href="{{ $page->baseUrl }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ $page->baseUrl }}assets/meta/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ $page->baseUrl }}assets/meta/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ $page->baseUrl }}assets/meta/favicon-16x16.png">
        <link rel="manifest" href="{{ $page->baseUrl }}assets/meta/site.webmanifest">
        <link rel="mask-icon" href="{{ $page->baseUrl }}assets/meta/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="{{ $page->baseUrl }}assets/meta/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ $page->baseUrl }}assets/meta/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i,700,700i|IBM+Plex+Sans:400,400i,700,700i|Volkhov:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div class="page-content">
            @include('_partials.nav-header')
            @yield('body')
        </div>
        <script src="/assets/prism.js"></script>
    </body>
</html>
