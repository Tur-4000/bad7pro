{{--@extends('layouts.comingsoon')--}}

@extends('layouts.app')

@section('title'){{ $title }}@endsection


@section('content')
    <div class="contacts">
        <h1 class="contacts__title">Связаться с нами</h1>
    </div>

    <div class="contacts__form form">
        {{ Form::open(['url' => '#']) }}
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

@endsection
