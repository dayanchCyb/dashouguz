<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="https://tugdk.gov.tm/assets/favicon/favicon-32x32.png">

    <title>Mary awtoulag</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-black">
@include('dashoguz.app.nav')

<main class="main">
    @yield('content')
</main>



@include('dashoguz.app.footer')
<script type="text/javascript" src="{{ asset('js/swiper-bundle-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('script.js') }}"></script>

</body>
</html>