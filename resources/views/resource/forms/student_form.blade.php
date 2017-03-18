@extends('resource.forms.default.physical_person_form')

@section('field')
    {!! Html::openField('registration', $errors, ['class' => 'four wide']) !!}
        {!! Form::label('registration', 'Matrícula') !!}
        {!! Form::text('registration') !!}
        {!! Html::errorField('registration', $errors) !!}
    {!! Html::closeDiv() !!}
@endsection