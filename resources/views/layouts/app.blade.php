<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mercado</title>

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @yield('styles')
</head>
<body style="background-color:#f9fffc">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-flex align-items-center" href="#">
            <a href="{{url('/')}}" class="ml-2" style="text-decoration: none;color:#f2f2f2"><b><h3>Mercado</h3></b></a>
        </a>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('clientes')}}">
                    <div class="row mr-1 ml-1">
                        <i class="material-icons mr-1">account_circle</i>
                        Clientes
                    </div>
                </a>
            </li>
            <!-- <ul class="navbar-nav mt-2 mt-lg-0 ml-auto"> -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('produtos')}}">
                    <div class="row mr-1 ml-1">
                        <i class="material-icons mr-1">shopping_cart</i>
                        Produtos
                    </div>
                </a>
            </li>
            <!-- <ul class="navbar-nav mt-2 mt-lg-0 ml-auto"> -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('compras/create')}}">
                    <div class="row mr-1 ml-1">
                        <i class="material-icons mr-1">attach_money</i>
                        Nova Compra
                    </div>
                </a>
            </li>
        </div>
    </nav>

    <div class="row">
        @if (Session::has('success'))
            <script>
                window.onload = function() {
                    alertMsg('{{Session::get("success")}}', 'success')
                }
            </script>
        @endif

        @if (Session::has('warning'))
            <script>
                window.onload = function() {
                    alertMsg('{{Session::get("warning")}}', 'warning')
                }
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                window.onload = function() {
                    alertMsg('{{Session::get("error")}}', 'error')
                }
            </script>
        @endif
    </div>

    <div class="container my-4">
        @yield('content')
    </div>

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 5000
        });

        function alertMsg(msg, type) {
            Toast.fire({
                type: type,
                title: msg
            })
        }

        //mascaras
        // $('.data').mask('99/99/9999');
        // $('.cpf').mask('999.999.999-99');
    </script>
    <script>
        $(document).ready(function(){
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('.cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000000000000000.00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
              translation: {
                'Z': {
                  pattern: /[0-9]/, optional: true
                }
              }
            });
            $('.qtd').mask('000', {placeholder: "Qntd."});
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                  'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                  },
                  placeholder: "__/__/____"
                }
              });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });
    </script>
    @yield('scripts')
</body>
</html>