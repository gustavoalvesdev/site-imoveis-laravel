<nav>
    <ul>
        <li><a href="{{Route('home')}}">Home</a></li>
        <li><a href="/alugar">Alugar</a></li>
        <li><a href="/comprar">Comprar</a></li>
        <li><a href="{{Route('sobre')}}">Sobre</a></li>
        <li><a href="{{Route('blog')}}">Blog</a></li>
        <li><a href="{{Route('contato')}}">Contato</a></li>
    </ul>
</nav>

<h1>Entre em Contato Conosco</h1>

<from>
    <label>Nome:</label><br>
    <input type="text" name="nome" /><br><br>
    <label>Telefone:</label><br>
    <input type="tel" name="telefone" /><br><br>
    <label>Mensagem:</label><br>
    <textarea name="mensagem" cols="20" rows="10"></textarea><br><br>
    <input type="submit" value="Enviar" />
</from>
