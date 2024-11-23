<?php
// Iniciar a sessão para armazenar informações e mensagens de erro
session_start();

// Configurações do banco de dados
$host = "localhost";  // Endereço do servidor do banco
$user = "root";       // Usuário do banco
$pass = "";           // Senha do banco
$dbname = "Fashion_luar";  // Nome do banco de dados

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar se houve erro na conexão com o banco de dados
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    // Validar se todos os campos foram preenchidos
    if (empty($nome) || empty($email) || empty($senha) || empty($confirma_senha)) {
        $_SESSION['erro'] = "Todos os campos são obrigatórios!";
        header("Location: cadastro.php");
        exit();
    }

    // Verificar se as senhas são iguais
    if ($senha !== $confirma_senha) {
        $_SESSION['erro'] = "As senhas não coincidem!";
        header("Location: cadastro.php");
        exit();
    }

    // Verificar se o e-mail já está cadastrado no banco
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // E-mail já cadastrado
        $_SESSION['erro'] = "Este e-mail já está em uso!";
        header("Location: cadastro.php");
        exit();
    }

    // Hashificar a senha (recomenda-se usar bcrypt)
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir o novo usuário no banco de dados
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha_hash);
    $stmt->execute();

    // Verificar se a inserção foi bem-sucedida
    if ($stmt->affected_rows > 0) {
        // Cadastro bem-sucedido
        $_SESSION['sucesso'] = "Cadastro realizado com sucesso! Você já pode fazer login.";
        header("Location: index.php"); // Redireciona para a página inicial com a mensagem de sucesso
        exit();
    } else {
        // Erro ao inserir os dados
        $_SESSION['erro'] = "Houve um erro ao cadastrar sua conta. Tente novamente!";
        header("Location: cadastro.php");
        exit();
    }

    // Fechar a conexão com o banco
    $stmt->close();
    $conn->close();
}
?>
