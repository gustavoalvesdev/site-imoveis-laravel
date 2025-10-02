<nav>

    <a href="{{Route('home')}}">Home</a> |
    <a href="{{Route('imoveis', ['modalidade' => 'alugar'])}}">Alugar</a> |
    <a href="{{Route('imoveis', ['modalidade' => 'comprar'])}}">Comprar</a> |
    <a href="{{Route('sobre')}}">Sobre</a> |
    <a href="{{Route('blog')}}">Blog</a> |
    <a href="{{Route('contato')}}">Contato</a>

</nav>

@yield('content')
