<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root"; // Usuário padrão no XAMPP
$password = "";     // Senha padrão no XAMPP
$dbname = "site_usuarios"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validar se os campos estão preenchidos
    if (empty($nome) || empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Criptografar a senha
    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados no banco de dados
    $sql = "INSERT INTO users (username, email, password) VALUES ('$nome', '$email', '$senha_criptografada')";

    if ($conn->query($sql) === TRUE) {
        // Redireciona para a página inicial (index.html) com o nome do usuário na URL
        header("Location:/nolacake/index.php ?usuario=" . urlencode($nome));
        exit(); // Para garantir que o script pare após o redirecionamento
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
// Fechar a conexão
$conn->close();
?>
