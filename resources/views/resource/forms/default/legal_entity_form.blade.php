<h4 class="ui dividing header">Dados Jurídicos</h4>

<div class="fields">
    {!! Html::openField('cnpj', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('cnpj', 'CNPJ') !!}
    {!! Form::text('cnpj') !!}
    {!! Html::errorField('cnpj', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('ie', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('ie', 'Incrição Estadual') !!}
    {!! Form::text('ie') !!}
    {!! Html::errorField('ie', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('foundation_date', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('foundation_date', 'Data de fundação') !!}
    {!! Form::date('foundation_date') !!}
    {!! Html::errorField('foundation_date', $errors) !!}
    {!! Html::closeDiv() !!}

    @yield('field')
</div>

@yield('fields')