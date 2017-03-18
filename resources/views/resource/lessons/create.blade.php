@extends('layouts.app')

@section('content')
    {!! Form::open(['class' => 'ui form', 'route' => ['platform.teams.lessons.store', 'team' => $team->id]]) !!}
    @include('resource.lessons.__form')

    {!! Form::submit('Cadastrar', ['class' => 'ui primary button']) !!}
    {!! Form::close() !!}
@endsection