<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{--                    @error('title')--}}
    {{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--                    @enderror--}}
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
        {{ Form::select('type',
                ['image' => 'Имиджевый', 'reklama' => 'Рекламный'],
                null,
                ['class' => 'form-control', 'placeholder' => 'Выберите тип ролика...']
            ) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('date', 'Дата') }}
        {{ Form::date('date', null, ['class' => 'form-control']) }}
    </div>
</div>
