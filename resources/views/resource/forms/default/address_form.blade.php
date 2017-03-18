<h4 class="ui dividing header">Endereço Residencial</h4>

<div class="fields">
    {!! Html::openField('zip_code', $errors, ['class' => 'two wide']) !!}
    {!! Form::label('zip_code', 'CEP') !!}
    {!! Form::text('zip_code') !!}
    {!! Html::errorField('zip_code', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('public_place', $errors, ['class' => 'seven wide']) !!}
    {!! Form::label('public_place', 'Logradouro') !!}
    {!! Form::text('public_place') !!}
    {!! Html::errorField('public_place', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('local_type', $errors, ['class' => 'five wide']) !!}
    {!! Form::label('local_type', 'Tipo Local') !!}
    {!! Form::text('local_type') !!}
    {!! Html::errorField('local_type', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('number', $errors, ['class' => 'two wide']) !!}
    {!! Form::label('number', 'Número') !!}
    {!! Form::text('number') !!}
    {!! Html::errorField('number', $errors) !!}
    {!! Html::closeDiv() !!}
</div>

<div class="fields">
    {!! Html::openField('district', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('district', 'Bairro') !!}
    {!! Form::text('district') !!}
    {!! Html::errorField('district', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('complement', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('complement', 'Complemento') !!}
    {!! Form::text('complement') !!}
    {!! Html::errorField('complement', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('city', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('city', 'Cidade') !!}
    {!! Form::text('city') !!}
    {!! Html::errorField('city', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('state', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('state', 'Estado') !!}
    {!! Form::text('state') !!}
    {!! Html::errorField('state', $errors) !!}
    {!! Html::closeDiv() !!}
</div>