
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="js/cadastro.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="cabeçalho">
            <i class="fa fa-times fechar" id="fechar-cadastro"></i>
            <big class="titulo">Cadastro</big>
            <p class="descrição">Crie sua conta preenchendo os campos abaixo.</p>

            <!-- Exibir mensagens de erro ou sucesso -->
            <?php if (isset($_SESSION['erro'])): ?>
                <div class="mensagem erro">
                    <?php echo $_SESSION['erro']; ?>
                </div>
                <?php unset($_SESSION['erro']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['sucesso'])): ?>
                <div class="mensagem sucesso">
                    <?php echo $_SESSION['sucesso']; ?>
                </div>
                <?php unset($_SESSION['sucesso']); ?>
            <?php endif; ?>

            <form class="cadastro-form" action="processa_cadastro.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required/>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required/>
                
                <label for="senha">Senha:</label>
                <div class="senha-container">
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required/>
                    <i class="fa fa-eye" id="toggle-senha"></i>
                </div>
                
                <label for="confirma-senha">Confirmar Senha:</label>
                <div class="senha-container">
                    <input type="password" id="confirma-senha" name="confirma_senha" placeholder="Confirme sua senha" required/>
                    <i class="fa fa-eye" id="toggle-confirma-senha"></i>
                </div>

                <input type="submit" name="enviar" value="Cadastrar"/>
            </form>
        </div>
    </div>
</body>
</html>