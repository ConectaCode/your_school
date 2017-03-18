<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/semantic/semantic.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    @yield('header-scripts')


</head>
<body>
<header>
    <nav class="ui inverted blue secondary pointing menu">
        <a href="" class="item">Home</a>
        <div class="ui dropdown item">
            Administração
            <i class="dropdown icon"></i>
            <div class="menu">
                <div class="item">
                    <i class="dropdown icon"></i>
                    <span class="text">Escolas</span>
                    <div class="menu">
                        <a class="item" href="{{ route('platform.schools.index') }}">Listar</a>
                        <a class="item" href="{{ route('platform.schools.create') }}">Cadastrar</a>
                    </div>
                </div>

                <div class="item">
                    <i class="dropdown icon"></i>
                    <span class="text">Alunos</span>
                    <div class="menu">
                        <a class="item" href="{{ route('platform.students.index') }}">Listar</a>
                        <a class="item" href="{{ route('platform.students.create') }}">Cadastrar</a>
                    </div>
                </div>

                <div class="item">
                    <i class="dropdown icon"></i>
                    <span class="text">Turmas</span>
                    <div class="menu">
                        <a class="item" href="{{ route('platform.teams.index') }}">Listar</a>
                        <a class="item" href="{{ route('platform.teams.create') }}">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<main class="ui blue segment container">

    @if(Session::has('success'))
        <div class="ui success message">
            <i class="close icon"></i>
            <div class="header">
                {!! Session::get('success') !!}
            </div>
        </div>
    @elseif(Session::has('error'))
        <div class="ui error message">
            <i class="close icon"></i>
            <div class="header">
                {!! Session::get('error') !!}
            </div>
        </div>
    @endif

    @yield('content')
</main>
<!-- Scripts -->
<script src="/semantic/semantic.min.js"></script>
<script src="/js/search_zip_code.js"></script>
<script src="/js/jquery_mask.min.js"></script>
<script src="/js/multiselect.js"></script>

<script>
    $('.message .close')
        .on('click', function () {
            $(this)
                .closest('.message')
                .transition('fade')
            ;
        })
    ;

    $('.dropdown')
        .dropdown({
            // you can use any ui transition
            transition: 'drop'
        })
    ;
</script>
@yield('scripts')

</body>
</html>
