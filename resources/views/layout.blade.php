<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Imóveis | @yield('title')</title>
</head>
<body>
    <nav>

        <a href="{{Route('home')}}">Home</a> |
        <a href="{{Route('imoveis', ['modalidade' => 'alugar'])}}">Alugar</a> |
        <a href="{{Route('imoveis', ['modalidade' => 'comprar'])}}">Comprar</a> |
        <a href="{{Route('sobre')}}">Sobre</a> |
        <a href="{{Route('blog')}}">Blog</a> |
        <a href="{{Route('contato')}}">Contato</a>

    </nav>

    @yield('content')
</body>
</html>


