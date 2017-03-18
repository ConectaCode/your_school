@extends('layouts.app')

@section('content')
    <div class="ui grid container">
        @foreach($teams as $team)
            <div class="sixteen wide mobile eight wide tablet four wide computer column">
                <div class="fluid card">
                    <div class="content">
                        <div class="header">
                            {{ $team->name }}
                        </div>

                        <div class="meta">
                            {{ $team->school_grade->name }}
                        </div>

                        <div class="description">
                            Quantidade de Alunos: {{ $team->students->count() }} <br>
                            Número de Matéria: {{ $team->lessons->count() }}
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="ui two buttons">
                            <a href="{{ route('platform.teams.show', ['team' => $team->id]) }}"
                               class="ui basic blue icon button">
                                <i class="ui list layout icon"></i>
                            </a>
                            <a href="{{ route('platform.teams.edit', ['team' => $team->id]) }}"
                               class="ui basic blue icon button">
                                <i class="ui edit icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection