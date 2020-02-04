<div class="form-group">
    {{ Form::label('name', 'Имя') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameHelp']) }}
    <small id="nameHelp" class="form-text text-muted">Имя пользователя</small>
</div>

<div class="form-group">
    {{ Form::label('email', 'eMail') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'aria-describedby' => 'emailHelp']) }}
    <small id="emailHelp" class="form-text text-muted">Действительный eMail, будет использоваться для входа в систему и восстановления пароля.</small>
</div>

@if($create)

    <div class="form-group">
        {{ Form::label('password', 'Пароль') }}
        {{ Form::password('password', $attributes = ['class' => 'form-control', 'aria-describedby' => 'passwordHelp']) }}
        <small id="passwordHelp" class="form-text text-muted">Пароль.</small>
    </div>

    <div class="form-group">
        {{ Form::label('password_confirmation', 'Подтверждение пароля') }}
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'aria-describedby' => 'passwordСonfirmationHelp']) }}
        <small id="passwordСonfirmationHelp" class="form-text text-muted">Подтверждение пароля.</small>
    </div>

    <div class="form-group">
        {{ Form::label('roles[]', 'Роль') }}
        {{ Form::select(
                'roles[]',
                $roles,
                null,
                ['class' => 'form-control', 'multiple' => 'multiple', 'aria-describedby' => 'roleHelp']
            ) }}
        <small id="roleHelp" class="form-text text-muted">Роли пользователя. Определяют уровни доступа к разделам сайта и операциям.</small>
    </div>


{{--    <script>--}}
{{--        tail.select('#roles', {--}}

{{--        });--}}
{{--    </script>--}}

@endif
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
