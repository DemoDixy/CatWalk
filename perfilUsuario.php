<?php
session_start(); // Inicia a sessão

if (!isset($_SESSION['idUsuario'])) {
    header("Location: formLogin.php"); // Redireciona para login se não estiver logado
    exit();
}

// Aqui você pode buscar as informações do usuário usando $_SESSION['idUsuario']
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Bem-vindo, <?php echo $_SESSION['nomeUsuario']; ?></h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>