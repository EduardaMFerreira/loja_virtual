<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="js/cadastro.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="cabeçalho">
            <i class="fa fa-times fechar" id="fechar-cadastro"></i>
            <big class="titulo">Cadastro</big>
            <p class="descrição">Crie sua conta preenchendo os campos abaixo.</p>
    </div>

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

    <script>
        // Funcionalidade de mostrar/esconder senha para o campo 'senha'
        const toggleSenha = document.getElementById('toggle-senha');
        const senhaField = document.getElementById('senha');
        toggleSenha.addEventListener('click', function () {
            const type = senhaField.type === 'password' ? 'text' : 'password';
            senhaField.type = type;
            this.classList.toggle('fa-eye-slash');
        });

        // Funcionalidade de mostrar/esconder senha para o campo 'confirmar senha'
        const toggleConfirmaSenha = document.getElementById('toggle-confirma-senha');
        const confirmaSenhaField = document.getElementById('confirma-senha');
        toggleConfirmaSenha.addEventListener('click', function () {
            const type = confirmaSenhaField.type === 'password' ? 'text' : 'password';
            confirmaSenhaField.type = type;
            this.classList.toggle('fa-eye-slash');
        });

        // Fechar o formulário de cadastro ao clicar no X
        const fecharCadastro = document.getElementById('fechar-cadastro');
        fecharCadastro.addEventListener('click', function () {
            document.querySelector('.container').style.display = 'none';
        });

        // Validar senhas antes de enviar o formulário
        document.querySelector('.cadastro-form').addEventListener('submit', function(e) {
            const senha = document.getElementById('senha').value;
            const confirmaSenha = document.getElementById('confirma-senha').value;

            if (senha !== confirmaSenha) {
                alert('As senhas não coincidem!');
                e.preventDefault(); // Impede o envio do formulário
            }
        });
    </script>
</body>
</html>
