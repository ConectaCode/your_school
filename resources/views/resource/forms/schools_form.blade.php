@extends('resource.forms.default.legal_entity_form')

@section('field')
    {!! Html::openField('mec_number', $errors, ['class' => 'four wide']) !!}
        {!! Form::label('mec_number', 'Número MEC') !!}
        {!! Form::text('mec_number') !!}
        {!! Html::errorField('mec_number', $errors) !!}
    {!! Html::closeDiv() !!}
@endsection
