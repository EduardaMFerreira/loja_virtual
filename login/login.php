<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="js/login.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="cabeçalho">
            <i class="fa fa-times fechar" id="fechar-login"></i>
            <big class="titulo">Login</big>
            <p class="descrição">Digite os seus dados de acesso no campo abaixo.</p>
            <form class="contato" action="processa_login.php" method="post">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required/>
                <label for="senha">Senha:</label>
                <div class="senha-container">
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required/>
                    <i class="fa fa-eye" id="toggle-password"></i>
                </div>
                <a href="#">Esqueci minha senha</a>
                <input type="submit" name="enviar" value="Acessar"/>
                <p>Não tem uma conta?<a href="cadastro.php">Cadastre-se</a></p>
            </form>
        </div>
    </div>
</body>
</html>
