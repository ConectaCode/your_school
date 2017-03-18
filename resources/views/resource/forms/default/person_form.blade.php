<div class="ui dividing header"></div>

<div class="fields">
    {!! Html::openField('name', $errors, ['class' => 'five wide']) !!}
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name') !!}
        {!! Html::errorField('name', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('email', $errors, ['class' => 'five wide']) !!}
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::email('email') !!}
        {!! Html::errorField('email', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('phone_1', $errors, ['class' => 'three wide']) !!}
        {!! Form::label('phone_1', 'Telefone Celular') !!}
        {!! Form::tel('phone_1') !!}
        {!! Html::errorField('phone_1', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('phone_2', $errors, ['class' => 'three wide']) !!}
        {!! Form::label('phone_2', 'Telefone Fixo') !!}
        {!! Form::tel('phone_2') !!}
        {!! Html::errorField('phone_2', $errors) !!}
    {!! Html::closeDiv() !!}
</div>