@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">

            @include('flash::message')

{{--            @if ($errors->any())--}}
{{--                @foreach ($errors->all() as $error)--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{ $error }}--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}

            <h1>Редактирование пользователя</h1>

            {{ Form::model($user, ['route' => ['manage.user.update', $user], 'method' => 'PATCH']) }}

            @include('manage.includes.user_form')

            <div class="form-group d-flex justify-content-between">
                {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
                <a href="{{ route('manage.user.index') }}" class="btn btn-outline-success">Назад</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
