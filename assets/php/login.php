<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root"; // Usuário padrão do XAMPP
$password = "";     // Senha padrão do XAMPP
$dbname = "site_usuarios"; // Nome do banco de dados

// Criar conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se os campos estão preenchidos
    if (empty($email) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Buscar o usuário no banco de dados
    $sql = "SELECT username, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nomeUsuario, $senhaHash);
        $stmt->fetch();

        // Verificar a senha
        if (password_verify($senha, $senhaHash)) {
            // Redirecionar para a página inicial com o nome do usuário
            header("Location: /nolacake/index.php?usuario=" . urlencode($nomeUsuario));
            exit;
        } else {
            echo "<script>alert('Senha incorreta.');</script>";
        }
    } else {
        echo "<script>alert('E-mail não encontrado, tente novamente.');</script>";
    }

    $stmt->close();
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
