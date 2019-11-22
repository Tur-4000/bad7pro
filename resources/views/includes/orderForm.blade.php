{{ Form::open(['url' => '#', 'method' => 'GET']) }}
<div class="form__element">
    {{ Form::label('name', 'Привет, меня зовут') }}
    {{ Form::text('name', null, ['class' => 'form__control', 'aria-describedby' => 'nameHelp']) }}
    <p class="form__help">Укажите своё имя</p>
</div>
<div class="form__element">
    {{ Form::label('company', 'я представляю компанию') }}
    {{ Form::text('company', null, ['class' => 'form__control', 'aria-describedby' => 'companyHelp']) }}
    <p class="form__help">Укажите название компании</p>
</div>
<div class="form__element">
    {{ Form::label('order', 'я хочу') }}
    {{ Form::textarea('order', null, ['class' => 'form__control', 'rows' => 5]) }}
</div>
<div class="form__element">
    {{ Form::label('contact', 'со мной можно связаться') }}
    {{ Form::text('contact', null, ['class' => 'form__control', 'aria-describedby' => 'contactHelp']) }}
    <p class="form__help">Укажите номер телефона или электронную почту</p>
</div>
<div class="form__element">
    {{ Form::submit('Отправить', ['class' => 'form__button']) }}
</div>
{{ Form::close() }}
