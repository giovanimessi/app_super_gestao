<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">

    <link href="{{asset('assets/css/estilo_basico.css')}}" rel="Stylesheet">
</head>

<body>
@include('site.layouts._partials.topo')
@yield('conteudo')

</body>

</html>