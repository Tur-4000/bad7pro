@extends('layouts.app')

@section('content')

    <div class="main">
        <div class="main__info main__info--wrapper">
                <h1 class="main__title">
                    <svg class="main__img">
                        <use xlink:href="/images/BAD7_logo.svg#full_logo"></use>
                    </svg>
                </h1>
                <p class="main__text">
                    Снимают все, а мы делаем хорошо видеоролики продающие Ваши товары (услуги).<br>
                    <a href="#order-form"  class="main__link popup-with-form">сделать хорошо</a>
                </p>
        </div>

        <div class="main__video">
            <div class="main__video--wrapper">

                <div class="video">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=Qv97VzXxUXc">
                        <button class="video__btn">
                            <svg>
                                <use xlink:href="/img/symbol/sprite.svg#play"></use>
                            </svg>
                        </button>
                    </a>
                </div>

            </div>
        </div>

        <div class="main__partners">
{{--            наши счастливые клиенты--}}

            <div class="clients__carousel owl-carousel owl-theme">
                <div class="clients__carousel--item item">
                    <img src="img/client1.png" alt="Клиент 1">
                </div>
                <div class="clients__carousel--item item">
                    <img src="img/client2.png" alt="Клиент 2">
                </div>
                <div class="clients__carousel--item item">
                    <img src="img/client3.png" alt="Клиент 3">
                </div>
                <div class="clients__carousel--item item">
                    <img src="img/client4.png" alt="Клиент 4">
                </div>
                <div class="clients__carousel--item item">
                    <img src="img/client5.png" alt="Клиент 5">
                </div>
                <div class="clients__carousel--item item">
                    <img src="img/client4.png" alt="Клиент 4">
                </div>
                <div class="clients__carousel--item item">
                    <img src="img/client5.png" alt="Клиент 5">
                </div>
            </div>

        </div>
    </div>

    <div id="order-form" class="white-popup mfp-hide popupOrderForm">
        @include('includes.popupOrderForm')
    </div>

@endsection

@section('scripts')

    <script>
        $('.popup-with-form').magnificPopup({
            type: 'inline',
            focus: '#name',
            preloader: false,
            modal: true
        });

        $(document).ready(function() {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,

                fixedContentPos: false
            });
        });

        $(document).on('click', '.popup-modal-dismiss', function(e) {
            e.preventDefault();
            $.magnificPopup.close();
        });

        $(document).ready(function () {
            $('.clients__carousel').owlCarousel({
                // loop: true,
                autoWidth: true,
                margin: 50,
                nav: false,
                navText: [],
                dots: false,
                items: 5,
        //         responsive: {
        //             0: {
        //                 items: 1
        //             },
        //             600: {
        //                 items: 3
        //             },
        //             1000: {
        //                 items: 5
        //             }
        //         }
            });
        });
    </script>

@endsection
