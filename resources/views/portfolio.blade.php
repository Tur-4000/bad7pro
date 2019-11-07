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

        @foreach($portfolio as $item)
            <li class="works__element">
                <div class="works__video">
                    <iframe width="368" height="207" src="{{ $item->url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="works__info">
                    <h2 class="works__title">{{ $item->title }}</h2>
                    <p class="works__details">
                        <time class="works__date" datetime="{{ $item->date }}">{{ Carbon\Carbon::parse($item->date)->toFormattedDateString() }}</time>
                        <span class="works__type">{{ $type[$item->type] }}</span>
                    </p>
                    <p class="works__description">{{ $item->description }}</p>
                </div>
            </li>
        @endforeach

        </ul>
    </section>

@endsection
