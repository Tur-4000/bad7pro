<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <link rel="stylesheet" href="{{ mix('/css/manage.css') }}">
    <title>Управление контентом</title>

</head>
<body>

{{--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">--}}
{{--    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>--}}
{{--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
{{--    <ul class="navbar-nav px-3">--}}
{{--        <li class="nav-item text-nowrap">--}}
{{--            <a class="nav-link" href="#">Sign out</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}

<div class="container-fluid">


    @include('manage.includes.nav')

    <div class="row px-sm-0 px-xs-0 mx-xs-0">
        <main class="col-xl-9 col-lg-10 col-md-12 py-4 px-md-1 px-0 px-sm-0 mt-5 mx-lg-auto mx-sm-0" role="main">

            @yield('content')

        </main>
    </div>

</div>

{{--<script src="js/jquery-3.js"></script>--}}
{{--<script src="js/bootstrap.js"></script>--}}

<script defer src="{{ mix('/js/manage.js') }}"></script>

</body>
</html>
