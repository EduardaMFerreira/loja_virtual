<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Fashion Luar</title>
</head>
<body>

    <header class="cabecalho">
        <section class="cabecalho__conteudo">
            <img class="cabecalho__conteudo__imagem" src="./assets/images/logo.jpg" alt="Logo da loja">

            <form class="cabecalho__conteudo__pesquisa" action="#" method="GET">
                <button class="cabecalho__conteudo__pesquisa__lupa"><img src="./assets/images/icons/lupa.png" alt="Lupa de pesquisa"></button>
                <input class="cabecalho__conteudo__pesquisa__barra" type="search" name="pesquisa" placeholder="Digite o item desejado">
            </form>

            <div class="cabecalho__conteudo__acesso">
                <a href="#"><img class="cabecalho__conteudo__acesso__imagem" src="./assets/images/icons/sacola_compras.png" title="Bolsa de compras" alt="Bolsa de compras"></a>

                <a href="#"><img class="cabecalho__conteudo__acesso__imagem" src="./assets/images/icons/perfil.png" title="Perfil do Usuário" alt="perfil do usuário"></a>
            </div>
        </section>

        <nav class="cabecalho__conteudo__navegacao">
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__novidades">Novidades</a>
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__vendidos">Mais Vendidos</a>
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__promocoes">Promoções</a>
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__vestuario">Vestuário</a>
        </nav>
    </header>

    <main class="conteudo">
        <section>
            <img class="conteudo__imagem" src="./assets/images/coleção.jpg" alt="Representação de atrativos">
        </section> 
        <section id="conteudo__novidades">
            <h2>Novidades</h2>
            <section class="conteudo__novidades__bleizers">
    
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/bleizer_cinza.png" alt="Bleizer cinza">
                    <h3>Bleizer Cinza</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/bleizer_verde.png" alt="Bleizer verde">
                    <h3>Bleizer Verde</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/bleizer_vinho.png" alt="Bleizer vinho">
                    <h3>Bleizer Vinho</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/bleizer_vermelho.png" alt="Bleizer vermelho">
                    <h3>Bleizer Vermelho</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
            </section>

        </section >
        <section id="conteudo__vendidos">
            
        </section>
        <section id="conteudo__promocoes">

        </section>
        <section id="conteudo__vestuario">

        </section>
    </main>

    <footer class="rodape">

    </footer>
</body>
</html>