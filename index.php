<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css?v=1.0">
    <script src="./assets/js/carrossel.js" defer></script>
    <script src="./assets/js/pesquisa.js" defer></script>
    <title>Fashion Luar</title>
</head>
<body>
    <header class="cabecalho">
        <section class="cabecalho__conteudo">
            <a href="index.php"><img class="cabecalho__conteudo__imagem" src="./assets/images/logo.jpg" alt="Logo da loja"></a>

            <form class="cabecalho__conteudo__pesquisa" action="#" method="GET">
                <button class="cabecalho__conteudo__pesquisa__lupa"><img src="./assets/images/icons/lupa.png" alt="Lupa de pesquisa"></button>
                <input class="cabecalho__conteudo__pesquisa__barra" type="search" name="pesquisa" placeholder="Digite o item desejado">
            </form>

            <div class="cabecalho__conteudo__acesso">
                <a href="#"><img class="cabecalho__conteudo__acesso__imagem" src="./assets/images/icons/sacola_compras.png" title="Bolsa de compras" alt="Bolsa de compras"></a>

                <a href="./login/login.php"><img class="cabecalho__conteudo__acesso__imagem" src="./assets/images/icons/perfil.png" title="Perfil do Usuário" alt="perfil do usuário"></a>
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
                    <img src="./assets/images/novidades/sobretudo_preto.png" alt="Sobretudo Preto">
                    <h3>Sobretudo Preto</h3>
                    <p class="preco">R$ 499,99</p>
                    <p class="parcelado">ou 6x de R$ 83,33 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_branco.png" alt="Sobretudo Branco">
                    <h3>Sobretudo Branco</h3>
                    <p class="preco">R$ 449,99</p>
                    <p class="parcelado">ou 5x de R$ 90,00 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_bege.png" alt="Sobretudo Bege">
                    <h3>Sobretudo Bege</h3>
                    <p class="preco">R$ 479,99</p>
                    <p class="parcelado">ou 6x de R$ 80,00 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_xadrez.png" alt="Sobretudo Xadrez">
                    <h3>Sobretudo Xadrez</h3>
                    <p class="preco">R$ 529,99</p>
                    <p class="parcelado">ou 56x de R$ 88,33 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
            </section>

        </section >

        <section id="conteudo__vendidos">
            <h2>Mais vendidos</h2>
            <div class="conteudo__vendidos__classificacao">
                <a href="#numero2"><img src="./assets/images/mais_vendidos/2.png" alt="2º mais vendido: Vestido de bolinhas"></a>
                <a href="#numero1"><img src="./assets/images/mais_vendidos/1.png" alt="1º mais vendido: Bleizer Azul"></a>
                <a href="#numero3"><img src="./assets/images/mais_vendidos/3.png" alt="3º mais vendido: Short dourado"></a>
            </div>
        </section>

        <section id="conteudo__promocoes">
            <h2>Promoções</h2>
            <section class="conteudo__novidades__bleizers">
    
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/saia_longa_rosa.png" alt="Saia Longa Rosa">
                    <h3>Saia Longa Rosa</h3>
                    <span>R$ 199,99</span>
                    <p class="preco">R$ 149,99</p>
                    <p class="parcelado">ou 3x de R$ 50,00 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/camisa_de_popelina-listrado.png" alt="Popelina Listrada">
                    <h3>Popelina Listrada</h3>
                    <span>R$ 169,99</span>
                    <p class="preco">R$ 139,99</p>
                    <p class="parcelado">ou 3x de R$ 46,66 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a> 
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/jaqueta_puffer.png" alt="Jaqueta Puffer">
                    <h3>Jaqueta Puffer</h3>
                    <span>R$ 389,99</span>
                    <p class="preco">R$ 329,99</p>
                    <p class="parcelado">ou 5x de R$ 66,00 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/calca_alfaiataria_bege.png" alt="Calça Alfaiataria">
                    <h3>Calça Alfaiataria</h3>
                    <span>R$ 269,99</span>
                    <p class="preco">R$ 219,99</p>
                    <p class="parcelado">ou 4x de R$ 55,00 sem juros</p>
                    <a class="comprar" href="#">Comprar agora</a>
                </div>
            </section>
        </section>

        <section id="conteudo__vestuario">
            <div class="titulo">Vestuario</div>
                
                <!-- Primeira linha de produtos -->
                <div class="scroll-container">
                    <h3>Parte de cima</h3>
                    <button class="nav-button left" onclick="scrollLeft(0)">&#9664;</button>
                    <div class="product-row" id="product-row-0">
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_felpudo.png" alt="Casaco Felpudo">
                                <p>Casaco Felpudo<br>R$ 320,99</p>
                                <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/breizer_marrom.png" alt="Bleizer Marrom">
                            <p>Bleizer Marrom<br>R$ 260,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_jeans.png" alt="Casaco Jeans">
                            <p>Casaco Jeans<br>R$ 280,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/promocoes/jaqueta_puffer.png" alt="Jaqueta Puffer">
                            <p>Jaqueta Puffer<br>R$ 329,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/sobretudo_bege_bolso.png" alt="Sobretudo com Bolso">
                            <p>Sobretudo c/Bolso<br>R$ 380,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_com_cachecol.png" alt="Casaco com Cachecol">
                            <p>Casaco c/Cachecol<br>R$ 350,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/camisa_de_popelina-listrado.png" alt="Popelina Listrada">
                            <p>Popelina Listrada<br>R$ 139,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_couro_preto.png" alt="Casaco-Couro Preto">
                            <p>Casaco Couro Preto<br>R$ 450,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/top_banco.png" alt="Sobretudo com Bolso">
                            <p>Top Branco<br>R$ 80,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/cima/gola_alta_preta.png" alt="Gola Alta Preta">
                            <p>Gola Alta Preta<br>R$ 120,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/floral.png" alt="Floral">
                            <p>Floral<br>R$ 150,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/camisa_preta.png" alt="Camisa Preta">
                            <p>Camisa Preta<br>R$ 100,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_bege.png" alt="Sebretudo Bege">
                            <p>Sobretudo Bege<br>R$ 479,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_branco.png" alt="Sobretudo Branco">
                            <p>Sobretudo Branco<br>R$ 449,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_preto.png" alt="Sobretudo Preto">
                            <p>Sobretudo Preto<br>R$ 499,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_xadrez.png" alt="Sobretudo Xadrez">
                            <p>Sobretudo Xadrez<br>R$ 529,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(0)">&#9654;</button>
                </div>
                
                    
                <!-- Primeira linha de produtos -->
                <div class="scroll-container">
                    <h3>Parte de baixo</h3>
                    <button class="nav-button left" onclick="scrollLeft(0)">&#9664;</button>
                    <div class="product-row" id="product-row-0">
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_vinho.png" alt="Saia Longa Vinho">
                            <p>Saia Longa Vinho<br>R$ 200,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/saia_longa_rosa.png" alt="Saia Longa Rosa">
                            <p>Saia Longa Rosa<br>R$ 149,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_bordada.png" alt="Saia Longa Bordada">
                            <p>Saia Bordada<br>R$ 259,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_com_cinto.png" alt="Saia c/Cinto">
                            <p>Saia c/Cinto<br>R$ 180,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_couro_marrom.png" alt="Saia Couro-Marrom">
                            <p>Saia Couro-Marrom<br>R$ 220,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_floral.png" alt="Saia Floral">
                            <p>Saia Floral<br>R$ 170,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/calca_alfaiataria_bege.png" alt="Calça Alfaiataria/B">
                            <p>Calça Alfaiataria/B<br>R$ 219,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_marrom.png">
                            <p>Calça Alfaiataria/M<br>R$ 230,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_preta.png" alt="Calça Alfaiataria/P">
                            <p>Calça Alfaiataria/P<br>R$ 230,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_rosa.png" alt="Calça Alfaiataria/R">
                            <p>Calça Alfaiataria/R<br>R$ 240,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_xadrez.png" alt="Calça Alfaiataria/X">
                            <p>Calça Alfaiataria/X<br>R$ 260,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img id="numero3" src="./assets/images/vestuario/baixo/calca_couro_vinho.png" alt="Calça Couro/Vinho">
                            <p>Calça Couro/Vinho<br>R$ 300,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_couro_preta.png" alt="Calça Couro/Preta">
                            <p>Calça Couro/Preta<br>R$ 310,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans_cinza.png" alt="Jeans Cinza">
                            <p>Jeans Cinza<br>R$ 200,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans.png" alt="Jeans">
                            <p>Jeans<br>R$ 190,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans_branco.png" alt="Jeans Branco">
                            <p>Jeans Branco<br>R$ 199,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(0)">&#9654;</button>
                </div>

                <!-- Primeira linha de produtos -->
                <div class="scroll-container">
                    <h3>Conjunto/Vestidos</h3>
                    <button class="nav-button left" onclick="scrollLeft(0)">&#9664;</button>
                    <div class="product-row" id="product-row-0">

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_azul.png" alt="Vestido Curto/Azul">
                            <p>Vestido Curto/Azul<br>R$ 200,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_preto.png" alt="Vestido Curto/Preto">
                            <p>Vestido Curto/Preto<br>R$ 220,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_alça.png" alt="Vestido Longo/Alça">
                            <p>Vestido Longo/Alça<br>R$ 300,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_animal_print.png" alt="Animal Print">
                            <p>Animal Print<br>R$ 320,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_azul.png" alt="Vestido Longo/Azul">
                            <p>Vestido Longo/Azul<br>R$ 330,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_bege.png" alt="Vestido Longo/Bege">
                            <p>Vestido Longo/B<br>R$ 340,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_bronze.png" alt="Vestido Longo/Bronze">
                            <p>Vestido Bronze<br>R$ 350,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_cinza.png" alt="Vestido Longo/C">
                            <p>Vestido Cinza<br>R$ 320,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_floral.png" alt="Vestido Floral">
                            <p>Vestido Floral<br>R$ 310,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img id="numero2" src="./assets/images/vestuario/vest_conj/vestido_longo_paete.png" alt="Vestido Longo/Paete">
                            <p>Vestido Paete<br>R$ 450,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img id="numero1" src="./assets/images/vestuario/vest_conj/vestido_longo_plumas.png" alt="Vestido Longo/Plumas">
                            <p>Vestido Plumas<br>R$ 480,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_xadrez.png" alt="Vestido Longo/Xadrez">
                            <p>Vestido Xadrez<br>R$ 310,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_vinho.png" alt="Vestido Longo/Vinho">
                            <p>Vestido Vinho<br>R$ 330,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/conjunto_branco&preto.png" alt="Conjunto/Preto&Branco">
                            <p>Conjunto/P&B<br>R$ 400,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/conjunto_preto&branco.png" alt="Conjunto/Branco&Preto">
                            <p>Conjunto/B&P<br>R$ 410,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_alça.png" alt="Vestido Curto/Alça">
                            <p>Vestido Curto/Alça<br>R$ 419,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(0)">&#9654;</button>
                </div>
        </section>
    </main>

     <!-- Rodapé -->
    <footer>
        <img class="rodape__logo" src="./assets/images/logo.jpg" alt="Fashion Luar">
        <p>Entre em contato conosco:<br>(XX) XXXXX-XXXX<br>email@gmail.com</p>
        <div class="rodape__pagamentos">
            <p>Forma de pagamento:</p>
            <img src="./assets/images/formas_de_pagamento.webp" alt="Formas de Pagamento">
        </div>
    </footer>

</body>
</html>