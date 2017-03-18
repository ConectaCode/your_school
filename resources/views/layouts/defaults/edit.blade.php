<h3>Editar {{$config['title']}}</h3>

{{ Form::model($data, ['class' => 'ui form', 'route' => [$config['route'], $config['identify'] => $data->id], 'method' => 'PUT']) }}
    @include("resource.{$config['path']}.__form")
    {!! Form::submit('Salvar Alterações', ['class' => 'ui primary button']) !!}
{{ Form::close() }}