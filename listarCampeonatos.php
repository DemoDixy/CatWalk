<?php
    echo "<h1 class='text-center text-white'>Lista de Campeonatos</h1>"; // Adicionando a classe aqui
    $listarCampeonatos = "SELECT * FROM Campeonatos";

    include "conexaoBD.php";

    // Uso de prepared statement para evitar SQL Injection
    $stmt = $conn->prepare($listarCampeonatos);
    $stmt->execute();
    $res = $stmt->get_result();
    
    $totalCampeonatos = mysqli_num_rows($res); // Busca o total de registros retornados pela query

    echo "<div class='alert alert-info text-center'>Há $totalCampeonatos Campeonatos cadastrados!</div>";

    // Monta a tabela para exibir os registros
    while($registro = $res->fetch_assoc()){
        $idCampeonato           = $registro["idCampeonato"];
        $fotoCampeonato         = $registro["fotoCampeonato"];
        $nomeCampeonato         = $registro["nomeCampeonato"];
        $descricaoCampeonato    = substr($registro["descricaoCampeonato"], 0, 100) . '...'; // Limitando a descrição
        $categoriaCampeonato    = $registro["categoriaCampeonato"];

        echo "
            <div class='col-sm-3'>
                <div class='card' style='width:100%; height:100%;'>
                    <img class='card-img-top' src='$fotoCampeonato' alt='Card image'>
                    <div class='card-body'>
                        <h4 class='card-title text-gray'>$nomeCampeonato</h4> <!-- Adicionando a classe aqui -->
                        <p class='card-text text-gray'>$descricaoCampeonato</p> <!-- Adicionando a classe aqui -->
                        <p class='card-text text-gray'>$categoriaCampeonato</p> <!-- Adicionando a classe aqui -->
                        <a href='detalhesCampeonato.php?id=$idCampeonato' class='btn btn-primary'>Ver Detalhes</a>
                    </div>
                </div>
            </div>
        ";
    }
?>