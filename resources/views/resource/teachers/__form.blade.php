<h4 class="ui dividing header">Dados Pessoais</h4>

<div class="fields">
    {!! Html::openField('name', $errors, ['class' => 'six wide']) !!}
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', null, ['placeholder' => 'Nome completo']) !!}
    {!! Html::errorField('name', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('email', $errors, ['class' => 'six wide']) !!}
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::email('email', null, ['placeholder' => 'Endereço de email']) !!}
    {!! Html::errorField('email', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('cpf', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('cpf', 'CPF') !!}
    {!! Form::text('cpf', null, ['placeholder' => 'CPF - Somente números']) !!}
    {!! Html::errorField('cpf', $errors) !!}
    {!! Html::closeDiv() !!}
</div>

<div class="fields">

    {!! Html::openField('rg', $errors, ['class' => 'three wide']) !!}
    {!! Form::label('rg', 'RG') !!}
    {!! Form::text('rg', null, ['placeholder' => 'RG - Somente números']) !!}
    {!! Html::errorField('rg', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('matter_id', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('matter_id', 'Formação') !!}
    {!! Form::select('matter_id', $matters) !!}
    {!! Html::errorField('matter_id', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('date_of_birth', $errors, ['class' => 'three wide']) !!}
    {!! Form::label('date_of_birth', 'Data de nascimento') !!}
    {!! Form::date('date_of_birth') !!}
    {!! Html::errorField('date_of_birth', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('phone_1', $errors, ['class' => 'three wide']) !!}
    {!! Form::label('phone_1', 'Telefone 1') !!}
    {!! Form::text('phone_1', null, ['placeholder' => 'Telefone 1']) !!}
    {!! Html::errorField('phone_1', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('phone_2', $errors, ['class' => 'three wide']) !!}
    {!! Form::label('phone_2', 'Telefone 2') !!}
    {!! Form::text('phone_2', null, ['placeholder' => 'Telefone 2']) !!}
    {!! Html::errorField('phone_2', $errors) !!}
    {!! Html::closeDiv() !!}
</div>

<h4 class="ui dividing header">Endereço Residencial</h4>

<div class="fields">
    {!! Html::openField('zip_code', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('zip_code', 'CEP') !!}
    {!! Form::text('zip_code') !!}
    {!! Html::errorField('zip_code', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('public_place', $errors, ['class' => 'eight wide']) !!}
    {!! Form::label('public_place', 'Logradouro') !!}
    {!! Form::text('public_place') !!}
    {!! Html::errorField('public_place', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('local_type', $errors, ['class' => 'five wide']) !!}
    {!! Form::label('local_type', 'Tipo Local') !!}
    {!! Form::text('local_type', null, ['placeholder' => 'Casa, Apt., etc']) !!}
    {!! Html::errorField('local_type', $errors) !!}
    {!! Html::closeDiv() !!}
</div>

<div class="fields">
    {!! Html::openField('number', $errors, ['class' => 'two wide']) !!}
    {!! Form::label('number', 'Número') !!}
    {!! Form::text('number') !!}
    {!! Html::errorField('number', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('district', $errors, ['class' => 'three wide']) !!}
    {!! Form::label('district', 'Bairro') !!}
    {!! Form::text('district') !!}
    {!! Html::errorField('district', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('complement', $errors, ['class' => 'five wide']) !!}
    {!! Form::label('complement', 'Complemento') !!}
    {!! Form::text('complement', null, ['placeholder' => 'Ponto de referência']) !!}
    {!! Html::errorField('complement', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('city', $errors, ['class' => 'six wide']) !!}
    {!! Form::label('city', 'Cidade') !!}
    {!! Form::text('city') !!}
    {!! Html::errorField('city', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('state', $errors, ['class' => 'six wide']) !!}
    {!! Form::label('state', 'Estado') !!}
    {!! Form::text('state') !!}
    {!! Html::errorField('state', $errors) !!}
    {!! Html::closeDiv() !!}
</div>

@section('scripts')

    <script>
        $(document).ready(function () {
            $('#phone_1').mask('(00) 00000-0000')
            $('#phone_2').mask('(00) 00000-0000')
            $('#cpf').mask('000.000.000-00')
            $('#zip_code').mask('00000-000')
        })

        function unmask() {
            $('#phone_1').unmask();
            $('#phone_2').unmask();
            $('#cpf').unmask();
            $('#zip_code').unmask();
        }
    </script>
@endsection
