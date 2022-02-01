<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="img/favicon.png">
    @include('layouts.style')
    <style>
        .breadcrumb_bg{
            background-image: url('assets/img/breadcrumb.png');
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>
    @include('layouts.breadcrumb')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.script')
</body>

</html>
