<h4 class="ui dividing header">Dados Pessoais</h4>

<div class="fields">
    {!! Html::openField('cpf', $errors, ['class' => 'four wide']) !!}
        {!! Form::label('cpf', 'CPF') !!}
        {!! Form::text('cpf') !!}
        {!! Html::errorField('cpf', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('rg', $errors, ['class' => 'four wide']) !!}
        {!! Form::label('rg', 'RG') !!}
        {!! Form::text('rg') !!}
        {!! Html::errorField('rg', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('date_of_birth', $errors, ['class' => 'four wide']) !!}
        {!! Form::label('date_of_birth', 'Data de Nascimento') !!}
        {!! Form::date('date_of_birth') !!}
        {!! Html::errorField('date_of_birth', $errors) !!}
    {!! Html::closeDiv() !!}

    @yield('field')
</div>

@yield('fields')