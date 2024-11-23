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