@extends('layouts.app')

@section('title'){{ $title }}@endsection


@section('content')

    <section class="portfolio">
        <div class="portfolio__header">
            <h1>Наши работы</h1>
        </div>
        <ul class="portfolio__filter filter">
            <li class="filter__element filter__element--active">
                <a href="#" class="filter__link">Все работы</a>
            </li>
            <li class="filter__element">
                <a href="#" class="filter__link">Рекламные</a>
            </li>
            <li class="filter__element">
                <a href="#" class="filter__link">Имиджевые</a>
            </li>
        </ul>
        <ul class="portfolio__works works">

            <li class="works__element">
                <div class="works__video">
                    <iframe width="368" height="207" src="https://www.youtube.com/embed/v0k22ZD1CyI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="works__info">
                    <h2 class="works__title">Пельмени</h2>
                    <p class="works__details">
                        <time class="works__date" datetime="2018-11-14">14 нояб. 2018 г.</time>
                        <span class="works__type">Реклама</span>
                    </p>
                    <p class="works__description">Реклама пельменей</p>
                </div>
            </li>

        </ul>
    </section>

@endsection
