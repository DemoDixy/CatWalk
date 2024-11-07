<?php
session_start(); // Inicia a sessão

include 'conexaoBD.php'; // Inclui a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['emailUsuario'];
    $senha = $_POST['senhaUsuario'];

    // Consulta o banco de dados
    $query = "SELECT * FROM usuarios WHERE emailUsuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
        
        // Verifica a senha
        if (password_verify($senha, $usuario['senhaUsuario'])) {
            // Armazena os dados do usuário na sessão
            $_SESSION['idUsuario'] = $usuario['idUsuario'];
            $_SESSION['nomeUsuario'] = $usuario['nomeUsuario'];
            header("Location: index.php"); // Redireciona para a página inicial
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>

<!-- Formulário de Login -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="actionLogin.php">
            <div class="mb-3">
                <label for="emailUsuario" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" required>
            </div>
            <div class="mb-3">
                <label for="senhaUsuario" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>