<?php

include "conexaoBD.php"; 
include "header.php";

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
        echo "<div class='alert alert-danger text-center'>Campeonato não encontrado.</div>";
        exit;
    }
} else {
    echo "<div class='alert alert-danger text-center'>ID do campeonato não fornecido.</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Campeonato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .campeonato-card {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .campeonato-card img {
            border-radius: 0.5rem 0.5rem 0 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card campeonato-card">
            <img class="card-img-top img-fluid" src="<?php echo htmlspecialchars($campeonato['fotoCampeonato']); ?>" alt="Imagem do Campeonato">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($campeonato['nomeCampeonato']); ?></h5>
                <p class="card-text"><strong>Descrição:</strong> <?php echo htmlspecialchars($campeonato['descricaoCampeonato']); ?></p>
                <p class="card-text"><strong>Categoria:</strong> <?php echo htmlspecialchars($campeonato['categoriaCampeonato']); ?></p>

                <div class="text-center">
                    <a href="inscricaoCampeonato.php?id=<?php echo $idCampeonato; ?>" class="btn btn-primary">Inscrever-se</a>
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>