<?php
// Iniciar a sessão
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
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    // Validar se os campos foram preenchidos
    if (empty($email) || empty($senha)) {
        $_SESSION['erro'] = "E-mail e senha são obrigatórios!";
        header("Location: index.php");
        exit();
    }

    // Verificar se o e-mail existe no banco de dados
    $stmt = $conn->prepare("SELECT id, nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        // E-mail não encontrado
        $_SESSION['erro'] = "E-mail ou senha incorretos!";
        header("Location: index.php");
        exit();
    }

    // Recuperar o nome e o hash da senha do banco de dados
    $stmt->bind_result($id, $nome, $senha_hash);
    $stmt->fetch();

    // Verificar se a senha fornecida corresponde à senha armazenada
    if (password_verify($senha, $senha_hash)) {
        // Senha correta - iniciar sessão do usuário
        $_SESSION['id'] = $id; // Armazenar o ID do usuário na sessão
        $_SESSION['nome'] = $nome; // Armazenar o nome do usuário na sessão
        $_SESSION['sucesso'] = "Login realizado com sucesso! Bem-vindo, $nome!"; // Mensagem de sucesso
        header("Location: index.php"); // Página de destino após login (index.php)
        exit();
    } else {
        // Senha incorreta
        $_SESSION['erro'] = "E-mail ou senha incorretos!";
        header("Location: index.php");
        exit();
    }

    // Fechar a conexão com o banco
    $stmt->close();
    $conn->close();
}
?>
