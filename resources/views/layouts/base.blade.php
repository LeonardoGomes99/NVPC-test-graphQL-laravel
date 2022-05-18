<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/sweetalert2.js"></script>
</head>
<body id="page-top">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('content')
</body>

</html>
