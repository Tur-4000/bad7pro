@extends('manage.layouts.manage-app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Добавление новой работы</h1>

            {{ Form::model($portfolio, ['route' => 'manage.portfolio.store', 'method' => 'POST']) }}
                <div class="form-group">
                    {{ Form::label('title', 'Заголовок') }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'aria-describedby' => 'titleHelp']) }}
                    <small id="titleHelp" class="form-text text-muted">Название ролика, максимум 128 символов.</small>
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Описание') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) }}
                    <small id="descriptionHelp" class="form-text text-muted">Развернутое описание ролика.</small>
                </div>

                <div class="form-group">
                    {{ Form::label('url', 'Ссылка') }}
                    {{ Form::text('url', $value = null, ['class' => 'form-control', 'aria-describedby' => 'urlHelp']) }}
                    <small id="urlHelp" class="form-text text-muted">Ссылка на ролик в таком виде: https://www.youtube.com/embed/v0k22ZD1CyI</small>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{ Form::label('type', 'Тип') }}
                        {{ Form::select('type', ['image' => 'Имиджевый', 'reklama' => 'Рекламный'], null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-md-6">
                        {{ Form::label('date', 'Дата') }}
                        {{ Form::date('date', null, ['class' => 'form-control']) }}
                    </div>
                </div>

                <div class="form-group">
                    {{ Form::submit('Сохранить', ['class' => 'btn btn-primary']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection
