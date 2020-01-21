{{--@extends('layouts.comingsoon')--}}

@extends('layouts.app')

@section('title'){{ $title }}@endsection


@section('content')
    <div class="contacts">
        <h1 class="contacts__title">Связаться с нами</h1>

        <div class="contacts__form form">
            @include('includes.orderForm')
        </div>

        <div class="contacts__footer">
            <div class="contacts__item">
                <p>Маріуполь, бул.Приморський, 25</p>
            </div>
            <div class="contacts__item">
                <p><a href="tel:+380675965672" class="contacts__link">+38 (067) 596 56 72</a></p>
            </div>
            <div class="contacts__item">
{{--                <p>Сотрудничать с нами</p>--}}
                <a href="mailto:sales@bad7.pro" class="contacts__link">sales@bad7.pro</a>
{{--                <p><a href="{{ route('vacancies.index') }}" class="contacts__link">Работать у нас</a></p>--}}
{{--                <a href="mailto:superhero@bad7.pro" class="contacts__link">superhero@bad7.pro</a>--}}
            </div>
        </div>

    </div>
@endsection
