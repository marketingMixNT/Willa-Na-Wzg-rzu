<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      <!--CookieBanner-->
    <script id="cookieyes" type="text/javascript"
        src="https://cdn-cookieyes.com/client_data/442951f7164be4a3c2079c1a/script.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K3F92V9N');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Title-->
    <title>@yield('title', 'Willa na Wzgórzu')</title>
    <meta name="description" content='@yield('description')'>
    <!--Cannonical-->
    <link rel="canonical" href="{{ url()->current() }}" />
    <!--Favicons-->
    @include('partials.favicon')
    <!--Facebook Meta-->
    @include('partials.facebook_meta')
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body class="overflow-x-hidden">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3F92V9N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <x-Preloader />
    <x-Header />

    {{ $slot }}





    <x-Footer />


</body>

</html>
