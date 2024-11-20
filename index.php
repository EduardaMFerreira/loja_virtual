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
            <a href="index.php"><img class="cabecalho__conteudo__imagem" src="./assets/images/logo.jpg" alt="Logo da loja"></a>

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
                    <img class="conteudo__novidades__variedade__img" src="./assets/images/novidades/sobretudo_preto.png" alt="Sobretudo Preto">
                    <h3>Sobretudo Preto</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img class="conteudo__novidades__variedade__img" src="./assets/images/novidades/sobretudo_branco.png" alt="Sobretudo Branco">
                    <h3>Sobretudo Branco</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img class="conteudo__novidades__variedade__img" src="./assets/images/novidades/sobretudo_bege.png" alt="Sobretudo Bege">
                    <h3>Sobretudo Bege</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img class="conteudo__novidades__variedade__img" src="./assets/images/novidades/sobretudo_xadrez.png" alt="Sobretudo Xadrez">
                    <h3>Sobretudo Xadrez</h3>
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
                    <img src="./assets/images/promocoes/saia_longa_rosa.png" alt="Saia Longa Rosa">
                    <h3>Saia Longa Rosa</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/camisa_de_popelina-listrado.png" alt="Popelina Listrada">
                    <h3>Popelina Listrada</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/jaqueta_puffer.png" alt="Jaqueta Puffer">
                    <h3>Jaqueta Puffer</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/calca_alfaiataria_bege.png" alt="Calça Alfaiataria">
                    <h3>Calça Alfaiataria</h3>
                    <p class="preco">R$ 99,99</p>
                    <p class="parcelado">ou 5X de R$ 19,99 sem juros</p>
                    <a href="#">Comprar agora</a>
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
                                <p>Casaco Felpudo<br>R$ 99,99</p>
                                <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/breizer_marrom.png" alt="Bleizer Marrom">
                            <p>Bleizer Marrom<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_jeans.png" alt="Casaco Jeans">
                            <p>Casaco Jeans<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/promocoes/jaqueta_puffer.png" alt="Jaqueta Puffer">
                            <p>Jaqueta Puffer<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/sobretudo_bege_bolso.png" alt="Sobretudo com Bolso">
                            <p>Sobretudo c/Bolso<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_com_cachecol.png" alt="Casaco com Cachecol">
                            <p>Casaco c/Cachecol<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/camisa_de_popelina-listrado.png" alt="Popelina Listrada">
                            <p>Popelina Listrada<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_couro_preto.png" alt="Casaco-Couro Preto">
                            <p>Casaco Couro Preto<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/top_banco.png" alt="Sobretudo com Bolso">
                            <p>Top Branco<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/cima/gola_alta_preta.png" alt="Gola Alta Preta">
                            <p>Gola Alta Preta<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/floral.png" alt="Floral">
                            <p>Floral<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/camisa_preta.png" alt="Camisa Preta">
                            <p>Camisa Preta<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_bege.png" alt="Sebretudo Bege">
                            <p>Sobretudo Bege<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_branco.png" alt="Sobretudo Branco">
                            <p>Sobretudo Branco<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_preto.png" alt="Sobretudo Preto">
                            <p>Sobretudo Preto<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_xadrez.png" alt="Sobretudo Xadrez">
                            <p>Sobretudo Xadrez<br>R$ 99,99</p>
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
                            <p>Saia Longa Vinho<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/saia_longa_rosa.png" alt="Saia Longa Rosa">
                            <p>Saia Longa Rosa<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_bordada.png" alt="Saia Longa Bordada">
                            <p>Saia Bordada<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_com_cinto.png" alt="Saia c/Cinto">
                            <p>Saia c/Cinto<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_couro_marrom.png" alt="Saia Couro-Marrom">
                            <p>Saia Couro-Marrom<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_floral.png" alt="Saia Floral">
                            <p>Saia Floral<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/calca_alfaiataria_bege.png" alt="Calça Alfaiataria/B">
                            <p>Calça Alfaiataria/B<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_marrom.png">
                            <p>Calça Alfaiataria/M<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_preta.png" alt="Calça Alfaiataria/P">
                            <p>Calça Alfaiataria/P<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_rosa.png" alt="Calça Alfaiataria/R">
                            <p>Calça Alfaiataria/R<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_xadrez.png" alt="Calça Alfaiataria/X">
                            <p>Calça Alfaiataria/X<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_couro_vinho.png" alt="Calça Couro/Vinho">
                            <p>Calça Couro/Vinho<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_couro_preta.png" alt="Calça Couro/Preta">
                            <p>Calça Couro/Preta<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans_cinza.png" alt="Jeans Cinza">
                            <p>Jeans Cinza<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans.png" alt="Jeans">
                            <p>Jeans<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans_branco.png" alt="Jeans Branco">
                            <p>Jeans Branco<br>R$ 99,99</p>
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
                            <p>Vestido Curto/Azul<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_preto.png" alt="Vestido Curto/Preto">
                            <p>Vestido Curto/Preto<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_alça.png" alt="Vestido Longo/Alça">
                            <p>Vestido Longo/Alça<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_animal_print.png" alt="Animal Print">
                            <p>Animal Print<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_azul.png" alt="Vestido Longo/Azul">
                            <p>Vestido Longo/Azul<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_bege.png" alt="Vestido Longo/Bege">
                            <p>Vestido Longo/B<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_bronze.png" alt="Vestido Longo/Bronze">
                            <p>Vestido Bronze<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_cinza.png" alt="Vestido Longo/C">
                            <p>Vestido Cinza<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_floral.png" alt="Vestido Floral">
                            <p>Vestido Floral<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_paete.png" alt="Vestido Longo/Paete">
                            <p>Vestido Paete<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_plumas.png" alt="Vestido Longo/Plumas">
                            <p>Vestido Plumas<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_xadrez.png" alt="Vestido Longo/Xadrez">
                            <p>Vestido Xadrez<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_vinho.png" alt="Vestido Longo/Vinho">
                            <p>Vestido Vinho<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/conjunto_branco&preto.png" alt="Conjunto/Preto&Branco">
                            <p>Conjunto/P&B<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/conjunto_preto&branco.png" alt="Conjunto/Branco&Preto">
                            <p>Conjunto/B&P<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_alça.png" alt="Vestido Curto/Alça">
                            <p>Vestido Curto/Alça<br>R$ 99,99</p>
                            <a href="#" class="button">COMPRAR AGORA</a>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(0)">&#9654;</button>
                </div>
        </section>
    </main>

     <!-- Rodapé -->
     <div class="footer">
        <img src="./assets/images/logo.jpg" alt="Fashion Luar">
        <p>Entre em contato conosco:<br>(XX) XXXXX-XXXX<br>email@gmail.com</p>
        <div>
            <p>Forma de pagamento:</p>
            <img src="./assets/images/formas_de_pagamento.webp" alt="Formas de Pagamento">
        </div>
    </div>

    <script>
        
        function scrollLeft(rowId) {
            const row = document.getElementById(product-row-${rowId});
            row.scrollBy({ left: -300, behavior: 'smooth' });
        }

        function scrollRight(rowId) {
            const row = document.getElementById(product-row-${rowId});
            row.scrollBy({ left: 300, behavior: 'smooth' });
        }

    </script>
    <script>

        const searchForm = document.querySelector('.cabecalho__conteudo__pesquisa');
        const searchInput = document.querySelector('.cabecalho__conteudo__pesquisa__barra');
        
        searchForm.addEventListener('submit', function(event) {
            event.preventDefault();  // Impede o envio do formulário
            
            const searchTerm = searchInput.value.toLowerCase();  // Obtém o texto da pesquisa
            const allProductsSections = document.querySelectorAll('.conteudo > section');  // Seleciona todas as seções de produtos
            let found = false;

            // Loop por todas as seções de produtos
            allProductsSections.forEach(section => {
                const products = section.querySelectorAll('.conteudo__novidades__variedade h3');  // Obtém todos os nomes de produtos dentro da seção
                let sectionContainsProduct = false;

                products.forEach(product => {
                    if (product.textContent.toLowerCase().includes(searchTerm)) {
                        product.parentElement.style.display = 'block';  // Exibe o produto
                        sectionContainsProduct = true;
                    } else {
                        product.parentElement.style.display = 'none';  // Oculta o produto
                    }
                });

                if (sectionContainsProduct) {
                    section.style.display = 'block';  // Exibe a seção se algum produto corresponder
                    found = true;
                } else {
                    section.style.display = 'none';  // Caso contrário, esconde a seção
                }
            });

            // Se nenhum produto for encontrado, exibe uma mensagem de alerta
            if (!found) {
                alert('Nenhum item encontrado!');
            }
        });

    </script>

</body>
</html>