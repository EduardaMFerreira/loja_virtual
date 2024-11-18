<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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
            <h2>Mais vendidos</h2>
            <div class="conteudo__vendidos__classificacao">
                <img src="./assets/images/mais_vendidos/vestido_de_bolinhas.jpg" alt="3º mais vendido: Vestido de bolinhas">
                <img src="./assets/images/mais_vendidos/bleizer_azul.png" alt="1º mais vendido: Bleizer Azul">
                <img src="./assets/images/mais_vendidos/short_dourado.jpg" alt="3º mais vendido: Short dourado">
            </div>
        </section>

        <section id="conteudo__promocoes">
            <h2>Promoções</h2>
            <section class="conteudo__novidades__bleizers">
    
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/blusa_banca.jpg" alt="Blusa Banca">
                    <h3>Blusa Banca</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/vestido_listrado.jpg" alt="Vestido Listrado">
                    <h3>Vestido Listrado</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/moletom.jpg" alt="Moletom">
                    <h3>Moletom</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/calca_de_elastico.jpg" alt="Calça de Elástico">
                    <h3>Calça de Elástico</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
            </section>
        </section>

        <section id="conteudo__vestuario">
        <h2 class="carrossel__titulo">ÚLTIMOS LANÇAMENTOS</h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-wrapper">
            <!-- Slides -->
                    <div class="swiper-slide"><img src="./assets/images/vestuario/cima/jaqueta.jpg" alt="Livro sobre apache kafka e spring boot da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/vestuario/cima/jaqueta_tecido.png" alt="Livro sobre liderança em design da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/vestuario/cima/top.png" alt="Livro sobre javascript assertivo da alurabooks"></div>
                    <div class="swiper-slide"><img src="./assets/images/vestuario/cima/jaqueta_couro.png" alt="Livro sobre guia Front-end da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/mais_vendidos/short_dourado.jpg" alt="Livro sobre Nodejs da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/mais_vendidos/short_dourado.jpg" alt="Livro sobre Nodejs da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/mais_vendidos/short_dourado.jpg" alt="Livro sobre Nodejs da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/mais_vendidos/short_dourado.jpg" alt="Livro sobre Nodejs da alura books"></div>
                    <div class="swiper-slide"><img src="./assets/images/mais_vendidos/short_dourado.jpg" alt="Livro sobre Nodejs da alura books"></div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>


        </section>
    </main>

    <footer class="rodape">

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            spaceBetween: 10,
            slidesPerView: 4,
            slidesPerGroup: 3, // Adicionado para passar 4 slides por vez
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>