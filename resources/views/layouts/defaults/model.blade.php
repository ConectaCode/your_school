@extends('layouts.app')

@section('content')
    @if($config['action'] == 'create')
        @include('layouts.defaults.create')
    @elseif($config['action'] == 'edit')
        @include('layouts.defaults.edit')
    @endif
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#phone_1').mask('(00) 00000-0000');
            $('#phone_2').mask('(00) 0000-0000');
            $('#cpf').mask('000.000.000-00');
            $('#cnpj').mask('00.000.000/0000-00');
            $('#zip_code').mask('00.000-000');
        })

        $('#multi-select').dropdown();
        function unmask() {
            $('#phone_1').unmask();
            $('#phone_2').unmask();
            $('#cpf').unmask();
            $('#zip_code').unmask();
        }

        jQuery(document).ready(function($) {
            $('#multiselect').multiselect();
        });
    </script>
@endsection