{{--@extends('layouts.comingsoon')--}}

@extends('layouts.app')

@section('title'){{ $title }}@endsection


@section('content')
    <div class="contacts">
        <h1 class="contacts__title">Связаться с нами</h1>

        <div class="contacts__form form">
            {{ Form::open(['url' => '#', 'method' => 'GET']) }}
            <div class="form__element">
                {{ Form::label('name', 'Привет, меня зовут') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameHelp']) }}
                <p class="form__help">Укажите своё имя</p>
            </div>
            <div class="form__element">
                {{ Form::label('company', 'я представляю компанию') }}
                {{ Form::text('company', null, ['class' => 'form-control', 'aria-describedby' => 'companyHelp']) }}
                <p class="form__help">Укажите название компании</p>
            </div>
            <div class="form__element">
                {{ Form::label('request', 'я хочу') }}
                {{ Form::textarea('request', null, ['class' => 'form-control', 'rows' => 5]) }}
            </div>
            <div class="form__element">
                {{ Form::label('contact', 'со мной можно связаться') }}
                {{ Form::text('contact', null, ['class' => 'form-control', 'aria-describedby' => 'contactHelp']) }}
                <p class="form__help">Укажите номер телефона или электронную почту</p>
            </div>
            <div class="form__element">
                {{ Form::submit('Отправить', ['class' => 'form__button']) }}
            </div>
            {{ Form::close() }}
        </div>

        <div class="contacts__footer">
            <div class="contacts__item">
                <p>Маріуполь, бул.Приморський, 25</p>
            </div>
            <div class="contacts__item">
                <p><a href="tel:+380675965672" class="contacts__link">+38 (067) 596 56 72</a></p>
            </div>
            <div class="contacts__item">
                <p>Сотрудничать с нами</p>
                <a href="mailto:sales@bad7.pro" class="contacts__link">sales@bad7.pro</a>
                <p>Работать у нас</p>
                <a href="mailto:superhero@bad7.pro" class="contacts__link">superhero@bad7.pro</a>
            </div>
        </div>

    </div>
@endsection
