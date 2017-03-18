@extends('layouts.app')

@section('header-scripts')
    {!! Charts::assets() !!}
@endsection

@section('content')
    {!! $chart->render() !!}
@endsection