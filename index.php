<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css?v=1.0">
        <script src="./assets/js/carrossel.js" defer></script>
        <script src="./assets/js/pesquisa.js" defer></script>
        <script src="./assets/js/vendidos.js" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <!-- Link para o Font Awesome (para os ícones) -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
                    <!-- Menu de carrinho (inicialmente oculto) -->
                    <div class="dropdown">
                        <a id="cart-dropdown-toggle" class="dropdown-toggle" href="#" role="button" onclick="toggleCart()">
                            <img class="cabecalho__conteudo__acesso__imagem" src="./assets/images/icons/sacola_compras.png" title="Bolsa de compras" alt="Bolsa de compras">
                        </a>
                        <ul id="cart-items-list" class="dropdown-menu" style="display: none;">
                            <div class="voltar-container">
                                <i class="fa fa-arrow-left voltar" onclick="goBack()"></i>
                                <span class="voltar-texto">Voltar</span>
                            </div>
                            <div class="itens">
                                <p>Itens adicionados: <span class="item-cor" id="item-count">0</span></p>
                                <ul id="cart-items">
                                    <!-- Itens do carrinho serão listados aqui -->
                                </ul>
                                <p class="total">Total: R$ <span id="total">0,00</span></p>
                                <div id="empty-cart-message" class="carrinho-vazio" style="display: none;">
                                    <img src="imagens/sacola-de-compras .png" alt="Carrinho Vazio">
                                    <p class="frase-abaixo-imagem">Nenhum item no momento</p>
                                </div>
                            </div>
                        </ul>
                    </div>

                    <!-- Camada de sobreposição (inicialmente oculta) -->
                    <div id="overlay" class="overlay" style="display: none;"></div>

                    <!-- Botão para abrir o modal de login -->
                    <a href="javascript:void(0)" onclick="openLoginMenu()">
                        <img class="cabecalho__conteudo__acesso__imagem" src="./assets/images/icons/perfil.png" title="Bolsa de compras" alt="Bolsa de compras">
                    </a>

                    <!-- Modal de login (inicialmente oculto) -->
                    <div id="login-modal" class="login-modal" style="display: none;">
                        <div class="login-modal-content">
                            <!-- Ícone de fechar -->
                            <i class="fa fa-times fechar" id="fechar-login"></i>
                            <div class="cabeçalho">
                                <h1 class="titulo">Login</h1>
                                <p class="descrição">Digite os seus dados de acesso no campo abaixo.</p>
                                <form class="contato" action="processa_login.php" method="post">
                                    <label for="email">E-mail:</label>
                                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required />
                                    <label for="senha">Senha:</label>
                                    <div class="senha-container">
                                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required />
                                        <i class="fa fa-eye" id="toggle-password"></i>
                                    </div>
                                    <a href="#">Esqueci minha senha</a>
                                    <input type="submit" name="enviar" value="Acessar" />
                                    <p>Não tem uma conta?<a href="cadastro.php">Cadastre-se</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <nav class="cabecalho__conteudo__navegacao">
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__novidades">Novidades</a>
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__vendidos">Mais Vendidos</a>
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__promocoes">Promoções</a>
            <a class="cabecalho__conteudo__navegacao__link" href="#conteudo__vestuario">Vestuário</a>
        </nav>
    </header>

    <main class="conteudo">
        <section>
            <img class="conteudo__imagem" src="./assets/images//Banner Paisagem Loja de Roupas Masculinas Criativo Azul e Rosa Pastel .jpg" alt="Representação de atrativos">
        </section> 
        <section id="conteudo__novidades">
            <h2>Novidades</h2>
            <section class="conteudo__novidades__bleizers">
    
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_preto.png" alt="Sobretudo Preto">
                    <h3>Sobretudo Preto</h3>
                    <p class="preco">R$ 499,99</p>
                    <p class="parcelado">ou 6x de R$ 83,33 sem juros</p>
                    <!--adicionar ao carrinho -->
                    <button class="add-to-cart" data-product="Sobretudo Preto" data-price="499,99">Comprar Agora</button>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_branco.png" alt="Sobretudo Branco">
                    <h3>Sobretudo Branco</h3>
                    <p class="preco">R$ 449,99</p>
                    <p class="parcelado">ou 5x de R$ 90,00 sem juros</p>
                    <!--adicionar ao carrinho -->
                    <button class="add-to-cart" data-product="Sobretudo Branco" data-price="449,99">Comprar Agora</button>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_bege.png" alt="Sobretudo Bege">
                    <h3>Sobretudo Bege</h3>
                    <p class="preco">R$ 479,99</p>
                    <p class="parcelado">ou 6x de R$ 80,00 sem juros</p>
                    <!--adicionar ao carrinho -->
                    <button class="add-to-cart" data-product="Sobretudo Bege" data-price="479,99">Comprar Agora</button>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/novidades/sobretudo_xadrez.png" alt="Sobretudo Xadrez">
                    <h3>Sobretudo Xadrez</h3>
                    <p class="preco">R$ 529,99</p>
                    <p class="parcelado">ou 56x de R$ 88,33 sem juros</p>
                    <button class="add-to-cart" data-product="Sobretudo Xadrez" data-price="529,99">Comprar Agora</button>
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
                    <button class="add-to-cart" data-product="Saia Longa Rosa" data-price="149,99">Comprar Agora</button>
            
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/camisa_de_popelina-listrado.png" alt="Popelina Listrada">
                    <h3>Popelina Listrada</h3>
                    <span>R$ 169,99</span>
                    <p class="preco">R$ 139,99</p>
                    <p class="parcelado">ou 3x de R$ 46,66 sem juros</p>
                    <button class="add-to-cart" data-product="Popelina Listrada" data-price="139,99">Comprar Agora</button>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/jaqueta_puffer.png" alt="Jaqueta Puffer">
                    <h3>Jaqueta Puffer</h3>
                    <span>R$ 389,99</span>
                    <p class="preco">R$ 329,99</p>
                    <p class="parcelado">ou 5x de R$ 66,00 sem juros</p>
                    <button class="add-to-cart" data-product="Jaqueta Puffer" data-price="329,99">Comprar Agora</button>
                </div>
                <div class="conteudo__novidades__variedade">
                    <img src="./assets/images/promocoes/calca_alfaiataria_bege.png" alt="Calça Alfaiataria">
                    <h3>Calça Alfaiataria</h3>
                    <span>R$ 269,99</span>
                    <p class="preco">R$ 219,99</p>
                    <p class="parcelado">ou 4x de R$ 55,00 sem juros</p>
                    <button class="add-to-cart" data-product="Calça Alfaiataria" data-price="219,99">Comprar Agora</button>
                </div>
            </section>
        </section>

        <section id="conteudo__vestuario">
            <div class="titulo">Vestuário</div>
                
                <!-- Primeira linha de produtos -->
                <div class="scroll-container">
                    <h3>Parte de cima</h3>
                    <button class="nav-button left" onclick="scrollLeft(1)">
                        <img src="./assets/images/seta/seta_esquerda.svg" alt="seta direita">
                    </button>
                    <div class="product-row" id="product-row-1">
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_felpudo.png" alt="Casaco Felpudo">
                                <p>Casaco Felpudo<br><span>R$ 320,99</span></p>
                                <button class="add-to-cart" data-product="Casaco Felpudo" data-price="320,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/breizer_marrom.png" alt="Bleizer Marrom">
                            <p>Bleizer Marrom<br><span>R$ 260,99</span></p>
                            <button class="add-to-cart" data-product="Bleizer Marrom" data-price="260,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_jeans.png" alt="Casaco Jeans">
                            <p>Casaco Jeans<br><span>R$ 280,99</span></p>
                            <button class="add-to-cart" data-product="Casaco Jeans" data-price="280,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/promocoes/jaqueta_puffer.png" alt="Jaqueta Puffer">
                            <p>Jaqueta Puffer<br><span>R$ 329,99</span></p>
                            <button class="add-to-cart" data-product="jaqueta Puffer" data-price="329,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/sobretudo_bege_bolso.png" alt="Sobretudo com Bolso">
                            <p>Sobretudo c/Bolso<br><span>R$ 380,99</span></p>
                            <button class="add-to-cart" data-product="Sobretudo c/Bolso" data-price="380,99">Comprar Agora</button>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_com_cachecol.png" alt="Casaco com Cachecol">
                            <p>Casaco c/Cachecol<br><span>R$ 350,99</span></p>
                            <button class="add-to-cart" data-product="Casaco c/Cachecol" data-price="350,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/camisa_de_popelina-listrado.png" alt="Popelina Listrada">
                            <p>Popelina Listrada<br><span>R$ 139,99</span></p>
                            <button class="add-to-cart" data-product="Popelina Listrada" data-price="139,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/casaco_couro_preto.png" alt="Casaco-Couro Preto">
                            <p>Casaco Couro Preto<br><span>R$ 450,99</span></p>
                            <button class="add-to-cart" data-product="Casaco Couro Preto" data-price="450,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/top_banco.png" alt="Sobretudo com Bolso">
                            <p>Top Branco<br><span>R$ 80,99</span></p>
                            <button class="add-to-cart" data-product="Top Branco" data-price="80,99">Comprar Agora</button>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/cima/gola_alta_preta.png" alt="Gola Alta Preta">
                            <p>Gola Alta Preta<br><span>R$ 120,99</span></p>
                            <button class="add-to-cart" data-product="Gola Alta Preta" data-price="120,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/floral.png" alt="Floral">
                            <p>Floral<br><span>R$ 150,99</span></p>
                            <button class="add-to-cart" data-product="Floral" data-price="150,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/cima/camisa_preta.png" alt="Camisa Preta">
                            <p>Camisa Preta<br><span>R$ 100,99</span></p>
                            <button class="add-to-cart" data-product="Camisa Preta" data-price="100,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_bege.png" alt="Sebretudo Bege">
                            <p>Sobretudo Bege<br><span>R$ 479,99</span></p>
                            <button class="add-to-cart" data-product="Sobretudo Bege" data-price="479,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_branco.png" alt="Sobretudo Branco">
                            <p>Sobretudo Branco<br><span>R$ 449,99</span></p>
                            <button class="add-to-cart" data-product="Sobretudo Branco" data-price="449,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_preto.png" alt="Sobretudo Preto">
                            <p>Sobretudo Preto<br><span>R$ 499,99</span></p>
                            <button class="add-to-cart" data-product="Sobretudo Preto" data-price="499,99">Comprar Agora</button>

                        <div class="item">
                            <img src="./assets/images/novidades/sobretudo_xadrez.png" alt="Sobretudo Xadrez">
                            <p>Sobretudo Xadrez<br><span>R$ 529,99</span></p>
                            <button class="add-to-cart" data-product="Sobretudo Xadrez" data-price="529,99">Comprar Agora</button>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(1)">
                        <img src="./assets/images/seta/seta_direita.svg" alt="seta esquerda ">
                    </button>
                </div>
                
                    
                <!-- Primeira linha de produtos -->
                <div class="scroll-container">
                    <h3>Parte de baixo</h3>
                    <button class="nav-button left" onclick="scrollLeft(2)">
                        <img src="./assets/images/seta/seta_esquerda.svg" alt="seta direita">
                    </button>
                    <div class="product-row" id="product-row-2">
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_vinho.png" alt="Saia Longa Vinho">
                            <p>Saia Longa Vinho<br><span>R$ 200,99</span></p>
                            <button class="add-to-cart" data-product="Saia Longa Vinho" data-price="200,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/saia_longa_rosa.png" alt="Saia Longa Rosa">
                            <p>Saia Longa Rosa<br><span>R$ 149,99</span></p>
                            <button class="add-to-cart" data-product="Saia Longa Rosa" data-price="149,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_bordada.png" alt="Saia Longa Bordada">
                            <p>Saia Bordada<br><span>R$ 259,99</span></p>
                            <button class="add-to-cart" data-product="Saia Bordada" data-price="259,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_com_cinto.png" alt="Saia c/Cinto">
                            <p>Saia c/Cinto<br><span>R$ 180,99</span></p>
                            <button class="add-to-cart" data-product="Saia c/Cinto" data-price="180,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_couro_marrom.png" alt="Saia Couro-Marrom">
                            <p>Saia Couro-Marrom<br><span>R$ 220,99</span></p>
                            <button class="add-to-cart" data-product="Saia Couro-Marrom" data-price="220,99">Comprar Agora</button>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/saia_floral.png" alt="Saia Floral">
                            <p>Saia Floral<br><span>R$ 170,99</span></p>
                            <button class="add-to-cart" data-product="Saia Floral" data-price="170,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/promocoes/calca_alfaiataria_bege.png" alt="Calça Alfaiataria/B">
                            <p>Calça Alfaiataria/B<br><span>R$ 219,99</span></p>
                            <button class="add-to-cart" data-product="Calça ALfaiataria/B" data-price="219,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_marrom.png">
                            <p>Calça Alfaiataria/M<br><span>R$ 230,99</span></p>
                            <button class="add-to-cart" data-product="Calça ALfaiataria/M" data-price="230,99">Comprar Agora</button>
                           
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_preta.png" alt="Calça Alfaiataria/P">
                            <p>Calça Alfaiataria/P<br><span>R$ 230,99</span></p>
                            <button class="add-to-cart" data-product="Calça Alfaiataria/P" data-price="230,99">230,99</button>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_rosa.png" alt="Calça Alfaiataria/R">
                            <p>Calça Alfaiataria/R<br><span>R$ 240,99</span></p>
                            <button class="add-to-cart" data-product="Calça Alfaiataria/R" data-price="240,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_alfaiataria_xadrez.png" alt="Calça Alfaiataria/X">
                            <p>Calça Alfaiataria/X<br><span>R$ 260,99</span></p>
                            <button class="add-to-cart" data-product="Calça Alfaiataria/X" data-price="260,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img id="numero3" src="./assets/images/vestuario/baixo/calca_couro_vinho.png" alt="Calça Couro/Vinho">
                            <p>Calça Couro/Vinho<br><span>R$ 300,99</span></p>
                            <button class="add-to-cart" data-product="Calça Couro/Vinho" data-price="300,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/calca_couro_preta.png" alt="Calça Couro/Preta">
                            <p>Calça Couro/Preta<br><span>R$ 310,99</span></p>
                            <button class="add-to-cart" data-product="Calça Couro/Preta" data-price="310,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans_cinza.png" alt="Jeans Cinza">
                            <p>Jeans Cinza<br><span>R$ 200,99</span></p>
                            <button class="add-to-cart" data-product="Jeans Cinza" data-price="200,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans.png" alt="Jeans">
                            <p>Jeans<br><span>R$ 190,99</span></p>
                            <button class="add-to-cart" data-product="Jeans" data-price="190,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/baixo/jeans_branco.png" alt="Jeans Branco">
                            <p>Jeans Branco<br><span>R$ 199,99</span></p>
                            <button class="add-to-cart" data-product="Jeans Branco" data-price="199,99">Comprar Agora</button>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(2)">
                        <img src="./assets/images/seta/seta_direita.svg" alt="seta esquerda">
                    </button>
                </div>

                <!-- Primeira linha de produtos -->
                <div class="scroll-container">
                    <h3>Conjunto/Vestidos</h3>
                    <button class="nav-button left" onclick="scrollLeft(3)">
                        <img src="./assets/images/seta/seta_esquerda.svg" alt="seta direita">
                    </button>
                    <div class="product-row" id="product-row-3">

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_azul.png" alt="Vestido Curto/Azul">
                            <p>Vestido Curto/Azul<br><span>R$ 200,99</span></p>
                            <button class="add-to-cart" data-product="Vestido Curto/Azul" data-price="200,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_preto.png" alt="Vestido Curto/Preto">
                            <p>Vestido Curto/Preto<br>R$ 220,99</p>
                            <button class="add-to-cart" data-product="Vestido Curto/Preto" data-price="220,99">Comprar Agora</button>
                        </div>
                        <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_alça.png" alt="Vestido Longo/Alça">
                            <p>Vestido Longo/Alça<br>R$ 300,99</p>
                            <button class="add-to-cart" data-product="Vestido Longo/Alça" data-price="300,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_animal_print.png" alt="Animal Print">
                            <p>Animal Print<br>R$ 320,99</p>
                            <button class="add-to-cart" data-product="Animal Print" data-price="320,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_azul.png" alt="Vestido Longo/Azul">
                            <p>Vestido Longo/Azul<br>R$ 330,99</p>
                            <button class="add-to-cart" data-product="Vestido Longo/Azul" data-price="330,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_bege.png" alt="Vestido Longo/Bege">
                            <p>Vestido Longo/B<br>R$ 340,99</p>
                            <button class="add-to-cart" data-product="Vestido Longo" data-price="340,99">Comprar Agora</button>
                        </div>
                            <!-- Adicione mais itens conforme necessário -->

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_bronze.png" alt="Vestido Longo/Bronze">
                            <p>Vestido Bronze<br>R$ 350,99</p>
                            <button class="add-to-cart" data-product="Vestido Bronze" data-price="350,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_cinza.png" alt="Vestido Longo/C">
                            <p>Vestido Cinza<br>R$ 320,99</p>
                            <button class="add-to-cart" data-product="Vestido Cinza" data-price="320,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_floral.png" alt="Vestido Floral">
                            <p>Vestido Floral<br>R$ 310,99</p>
                            <button class="add-to-cart" data-product="Vestido Floral" data-price="310,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img id="numero2" src="./assets/images/vestuario/vest_conj/vestido_longo_paete.png" alt="Vestido Longo/Paete">
                            <p>Vestido Paete<br>R$ 450,99</p>
                            <button class="add-to-cart" data-product="Vestido Paete" data-price="450,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img id="numero1" src="./assets/images/vestuario/vest_conj/vestido_longo_plumas.png" alt="Vestido Longo/Plumas">
                            <p>Vestido Plumas<br>R$ 480,99</p>
                            <button class="add-to-cart" data-product="Vestido Plumas" data-price="480,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_xadrez.png" alt="Vestido Longo/Xadrez">
                            <p>Vestido Xadrez<br>R$ 310,99</p>
                            <button class="add-to-cart" data-product="Vestido Xadrez" data-price="310,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_longo_vinho.png" alt="Vestido Longo/Vinho">
                            <p>Vestido Vinho<br>R$ 330,99</p>
                            <button class="add-to-cart" data-product="Vestido Vinho" data-price="330,99">Comprar Agora</button>
                        </div>

                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/conjunto_branco&preto.png" alt="Conjunto/Preto&Branco">
                            <p>Conjunto/P&B<br>R$ 400,99</p>
                            <button class="add-to-cart" data-product="Conjunto/P&B" data-price="400,99">Comprar Agora</button>
                
                        </div>
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/conjunto_preto&branco.png" alt="Conjunto/Branco&Preto">
                            <p>Conjunto/B&P<br>R$ 410,99</p>
                            <button class="add-to-cart" data-product="Conjunto/B&P" data-price="410,99">Comprar Agora</button>
                        </div>
                
                        <div class="item">
                            <img src="./assets/images/vestuario/vest_conj/vestido_curto_alça.png" alt="Vestido Curto/Alça">
                            <p>Vestido Curto/Alça<br>R$ 419,99</p>
                            <button class="add-to-cart" data-product="Vestido  Curto" data-price="419,99">Comprar Agora</button>
                        </div>
                    </div>
                    <button class="nav-button right" onclick="scrollRight(3)">
                        <img src="./assets/images/seta/seta_direita.svg" alt="seta esquerda">
                    </button>
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

    <!-- Script do Bootstrap e do menu -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
   <script>
    // Função para abrir/fechar o menu de carrinho
function toggleCart() {
    const cartContainer = document.getElementById('cart-items-list');
    const cartOverlay = document.getElementById('overlay');

    // Alternar visibilidade do carrinho
    if (cartContainer.style.display === 'none' || cartContainer.style.display === '') {
        cartContainer.style.display = 'block'; // Exibe o menu do carrinho
        cartOverlay.style.display = 'block';   // Exibe a sobreposição
    } else {
        cartContainer.style.display = 'none';  // Esconde o menu de carrinho
        cartOverlay.style.display = 'none';    // Esconde a sobreposição
    }
}

// Função para fechar o menu de carrinho ao clicar na sobreposição ou na seta "Voltar"
function goBack() {
    const cartContainer = document.getElementById('cart-items-list');
    const cartOverlay = document.getElementById('overlay');

    cartContainer.style.display = 'none';  // Esconde o menu de carrinho
    cartOverlay.style.display = 'none';    // Esconde a sobreposição
}

// Adiciona o evento de clique na sobreposição para fechar o carrinho e a sobreposição
document.getElementById('overlay').addEventListener('click', goBack);

// Array para armazenar os itens do carrinho
let cart = [];

// Função para adicionar produto ao carrinho
function addToCart(product, price) {
    // Adiciona o produto ao carrinho
    cart.push({ product, price });

    // Atualiza o localStorage com o carrinho atualizado
    localStorage.setItem('cart', JSON.stringify(cart));

    // Atualiza a interface do carrinho
    updateCartUI();
}


// Função para remover produto do carrinho
function removeFromCart(index) {
    // Remove o item com base no índice
    cart.splice(index, 1);

    // Atualiza o localStorage com o carrinho atualizado
    localStorage.setItem('cart', JSON.stringify(cart));

    // Atualiza a interface do carrinho
    updateCartUI();
}


// Função para atualizar a interface do carrinho
function updateCartUI() {
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('total');
    const itemCount = document.getElementById('item-count');
    const cartContainer = document.getElementById('cart-items-list'); // Contêiner do carrinho
    const emptyCartMessage = document.getElementById('empty-cart-message'); // Div da mensagem de carrinho vazio

    // Limpa o conteúdo atual da lista de itens do carrinho
    cartItemsList.innerHTML = '';

    // Verifica se o carrinho tem itens ou está vazio
    if (cart.length > 0) {
        // Adiciona a classe para o carrinho com itens
        cartContainer.classList.add('cart-not-empty');
        
        // Adiciona os itens ao dropdown
        cart.forEach((item, index) => {
            const listItem = document.createElement('li');
            listItem.innerHTML = `
                ${item.product} - R$ ${item.price.toFixed(2)} 
                <button onclick="removeFromCart(${index})" class="remove-item-btn">
                    <i class="fa fa-trash"></i> Remover
                </button>
            `;
            cartItemsList.appendChild(listItem);
        });

        // Atualiza o total
        const total = cart.reduce((sum, item) => sum + item.price, 0);
        cartTotal.innerHTML = total.toFixed(2);
        itemCount.innerHTML = cart.length; // Atualiza o contador de itens

        // Esconde a mensagem e imagem de carrinho vazio
        emptyCartMessage.style.display = 'none';
    } else {
        // Remove a classe quando o carrinho está vazio
        cartContainer.classList.remove('cart-not-empty');

        // Exibe a mensagem de carrinho vazio
        cartTotal.innerHTML = '0,00';
        itemCount.innerHTML = '0';

        // Exibe a mensagem e imagem de carrinho vazio
        emptyCartMessage.style.display = 'block';
    }
}

// Adicionando o evento de clique para os botões "Adicionar ao carrinho"
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        // Obtendo os dados do produto e preço do botão
        const product = this.getAttribute('data-product');
        const price = parseFloat(this.getAttribute('data-price'));

        // Chamando a função para adicionar o item ao carrinho
        addToCart(product, price);
    });
});

// Função para carregar o carrinho ao iniciar a página
function loadCartFromStorage() {
    // Recupera o carrinho armazenado no localStorage
    const storedCart = localStorage.getItem('cart');
    
    // Se houver dados no localStorage, carrega o carrinho
    if (storedCart) {
        cart = JSON.parse(storedCart);
    }
    
    // Atualiza a interface do carrinho com os dados carregados
    updateCartUI();
}

// Carrega o carrinho do localStorage ao carregar a página
window.onload = loadCartFromStorage;

// Função para abrir o modal de login
function openLoginMenu() {
    var modal = document.getElementById('login-modal');
    var overlay = document.getElementById('overlay');
    modal.style.display = "flex";  // Torna o modal visível
    overlay.style.display = "block";  // Torna o overlay visível
}

// Função para fechar o menu de login (ocultar o modal e o overlay)
function closeLoginMenu() {
    var modal = document.getElementById('login-modal');
    var overlay = document.getElementById('overlay');
    modal.style.display = "none"; // Oculta o modal
    overlay.style.display = "none"; // Oculta o overlay
}

// Fechar o modal ao clicar no ícone de fechar
document.getElementById('fechar-login').addEventListener('click', function() {
    closeLoginMenu();
});

// Fechar o modal ao clicar fora da área do conteúdo
window.addEventListener('click', function(event) {
    var modal = document.getElementById('login-modal');
    var overlay = document.getElementById('overlay');
    // Verifica se o clique foi fora do modal ou do overlay
    if (event.target == modal || event.target == overlay) {
        closeLoginMenu();
    }
});
</script>
</body>
</html>
