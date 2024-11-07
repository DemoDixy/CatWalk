<?php
include "conexaoBD.php"; 
include "header.php"; 

session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['idUsuario'])) {
    header("Location: formLogin.php"); // Redireciona para a página de login
    exit;
}

// Verifica se o ID do campeonato foi passado na URL
if (isset($_GET['id'])) {
    $idCampeonato = $_GET['id'];

    // Prepara a consulta para buscar os detalhes do campeonato
    $query = "SELECT * FROM campeonatos WHERE idCampeonato = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $idCampeonato);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Exibe os detalhes do campeonato
        $campeonato = $resultado->fetch_assoc();
    } else {
        echo "Campeonato não encontrado.";
        exit;
    }
} else {
    echo "ID do campeonato não fornecido.";
    exit;
}

// Processa a inscrição
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUsuario = $_SESSION['idUsuario']; // Recupera o id do usuário da sessão
    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];

    // Insere a inscrição no banco de dados
    $queryInscricao = "INSERT INTO inscricoes (idCampeonato, idUsuario, nomeUsuario, emailUsuario) VALUES (?, ?, ?, ?)";
    $stmtInscricao = $conn->prepare($queryInscricao);
    $stmtInscricao->bind_param("iiss", $idCampeonato, $idUsuario, $nomeUsuario, $emailUsuario);

    if ($stmtInscricao->execute()) {
        echo "<div class='alert alert-success text-center'>Inscrição realizada com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Erro ao inscrever: " . $stmtInscricao->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição no Campeonato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-white">Inscrição no Campeonato: <?php echo htmlspecialchars($campeonato['nomeCampeonato']); ?></h1>

                <form method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nomeUsuario" class="form-label text-white">Nome:</label>
                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" required>
            </div>
            <div class="mb-3">
                <label for="emailUsuario" class="form-label text-white">Email:</label> <!-- Cor alterada aqui -->
                <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" required>
            </div>
            <button type="submit" class="btn btn-primary">Inscrever-se</button>
            <a href="detalhesCampeonato.php?id=<?php echo $idCampeonato; ?>" class="btn btn-secondary">Voltar aos Detalhes</a>
        </form>
    </div>
</body>
</html>