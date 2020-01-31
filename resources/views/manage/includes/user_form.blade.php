{{--<div class="form-group custom-control custom-switch">--}}
{{--    {{ Form::checkbox('published', 1, true, ['class' => 'custom-control-input']) }}--}}
{{--    {{ Form::label('published', 'Опубликовать', ['class' => 'custom-control-label']) }}--}}
{{--</div>--}}

<div class="form-group">
    {{ Form::label('name', 'Имя') }}
    {{--                    @error('title')--}}
    {{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--                    @enderror--}}
    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameHelp']) }}
    <small id="nameHelp" class="form-text text-muted">Имя пользователя</small>
</div>

<div class="form-group">
    {{ Form::label('email', 'eMail') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'aria-describedby' => 'emailHelp']) }}
    <small id="emailHelp" class="form-text text-muted">Действительный eMail, будет использоваться для входа в систему и восстановления пароля.</small>
</div>

<div class="form-group">
    {{ Form::label('password', 'Пароль') }}
    {{ Form::password('password', $attributes = ['class' => 'form-control', 'aria-describedby' => 'passwordHelp']) }}
    <small id="passwordHelp" class="form-text text-muted">Пароль.</small>
</div>

<div class="form-group">
    {{ Form::label('passwordСonfirmation', 'Подтверждение пароля') }}
    {{ Form::password('passwordСonfirmation', ['class' => 'form-control', 'aria-describedby' => 'passwordСonfirmationHelp']) }}
    <small id="passwordСonfirmationHelp" class="form-text text-muted">Подтверждение пароля.</small>
</div>

{{--<div class="form-row">--}}
{{--    <div class="form-group col-md-6">--}}
{{--        {{ Form::label('type', 'Тип') }}--}}
{{--        {{ Form::select('type',--}}
{{--                ['image' => 'Имиджевый', 'reklama' => 'Рекламный'],--}}
{{--                null,--}}
{{--                ['class' => 'form-control', 'placeholder' => 'Выберите тип ролика...']--}}
{{--            ) }}--}}
{{--    </div>--}}
{{--    <div class="form-group col-md-6">--}}
{{--        {{ Form::label('date', 'Дата') }}--}}
{{--        {{ Form::date('date', null, ['class' => 'form-control']) }}--}}
{{--    </div>--}}
{{--</div>--}}
