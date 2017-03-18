<h3>Cadastrar {{$config['title']}}</h3>

{{ Form::open(['class' => 'ui form', 'route' => $config['route']]) }}
@include("resource.{$config['path']}.__form")
{!! Form::submit('Cadastrar', ['class' => 'ui primary button']) !!}
{{ Form::close() }}