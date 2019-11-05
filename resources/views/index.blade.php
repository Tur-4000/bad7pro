@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="main__info">
            <h1 class="main__title">
                <!--            Видеостудия<br> -->
                bad7<br>
                <span>production</span>
            </h1>
            <p class="main__text">
                Просто делаем хорошо!<br>
                <a href="#" class="main__link">сделать хорошо</a>
            </p>
        </div>

        <div class="main__video">
            <div class="main__video--wrapper">

                <div class="video">
                    <button class="video__btn">
                        <svg>
                            <use xlink:href="/img/symbol/sprite.svg#play"></use>
                        </svg>
                    </button>
                    <p class="video__text">
                        video будет запускаться по кнопке
                    </p>
                </div>

            </div>
        </div>

        <div class="main__partners">
            наши счастливые клиенты
{{--            <div class="clients__carousel carousel owl-carousel owl-theme">--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client1.png" alt="Клиент 1">--}}
{{--                </div>--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client2.png" alt="Клиент 2">--}}
{{--                </div>--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client3.png" alt="Клиент 3">--}}
{{--                </div>--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client4.png" alt="Клиент 4">--}}
{{--                </div>--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client5.png" alt="Клиент 5">--}}
{{--                </div>--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client4.png" alt="Клиент 4">--}}
{{--                </div>--}}
{{--                <div class="carousel__item">--}}
{{--                    <img src="img/client5.png" alt="Клиент 5">--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

@endsection
