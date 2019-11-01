@extends('layouts.app')

@section('title'){{ $title }}@endsection


@section('content')
    <section class="services">
        <div class="services__header"></div>
        <div class="services__content">
            <div class="services__card card">
                <div class="card__head card__head--reklama"></div>
                <h2 class="card__title">Рекламный ролик</h2>
                <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut consequuntur dicta dolorum est facilis fuga fugit laborum magni necessitatibus placeat quam veniam, voluptatem. Dicta dolores ducimus est exercitationem laborum.</div>
                <button class="card__btn">Закажи меня</button>
            </div>
            <div class="services__card card">
                <div class="card__head card__head--image"></div>
                <h2 class="card__title">Имиджевый ролик</h2>
                <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolore, dolores, eligendi eveniet exercitationem facere iusto maxime nam numquam officia perspiciatis similique veniam. Cupiditate fugit in ipsum, itaque libero minima nam non optio.</div>
                <button class="card__btn">Закажи меня</button>
            </div>
            <div class="services__card card">
                <div class="card__head card__head--translation"></div>
                <h2 class="card__title">Трансляции</h2>
                <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet molestias nihil odio ut voluptatibus. Adipisci alias, commodi cumque cupiditate debitis, ex expedita explicabo fugiat impedit inventore molestiae molestias necessitatibus nisi numquam quas quis quos repellendus, sapiente totam voluptates. Esse ipsam iure voluptatibus?</div>
                <button class="card__btn">Закажи меня</button>
            </div>
            <div class="services__card card">
                <div class="card__head card__head--promotion"></div>
                <h2 class="card__title">Продвижение</h2>
                <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at beatae, commodi debitis deserunt dolorem eos ipsa itaque nihil optio perspiciatis quam tempore tenetur velit!</div>
                <button class="card__btn">Закажи меня</button>
            </div>
        </div>
    </section>
@endsection
