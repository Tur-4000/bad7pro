<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
    <title>bad7pro - @yield('title')</title>
</head>
<body>
    <div class="container">

        @include('layouts.menu')

        <main class="content">
            @yield('content')
        </main>

    </div>

    <script>
        const hamburger = document.querySelector(`.hamburger`);

        hamburger.addEventListener(`click`, (e) => {
            e.target.closest(`.hamburger`).classList.toggle(`hamburger--active`);
            e.target.closest(`.navbar`).querySelector('.navbar__list').classList.toggle(`navbar__list--active`);
        });


    </script>

    @yield('scripts')

</body>
</html>
