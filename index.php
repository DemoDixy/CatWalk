<?php include("header.php"); ?>

    <div class="container text-center mt-3 mb-5">

        <!-- Alerta criado para informar a quantidade de produtos -->
        <br>
        <link rel = "stylesheet" type="text/css" href="cssindex.css">

        <!-- Formulário para aplicar filtros aos produtos -->
 
        <form name="formFiltro" action="index.php" method="GET" style="width:50%; margin:auto;">
            <select class="form-select" name="filtroProduto" required>
                <option value="todos">Visualizar todos os Campeonatos</option>
                <option value="disponivel">Visualizar apenas Campeonatos Disponíveis</option>
                <option value="vendido">Visualizar apenas Campeonatos de Valorant</option>
                <option value="vendido">Visualizar apenas Campeonatos de Fortnite</option>
                <option value="vendido">Visualizar apenas Campeonatos de Call of Duty Mobile</option>
            </select><br>
            <button type="submit" class="btn btn-primary" style="float:right">
                Filtrar Produtos
            </button>
        </form>


        <!-- Início da primeira linha da GRID -->
        <div class="row mt-5">
           <?php include("listarCampeonatos.php"); ?>
        </div>

    </div>

<?php include("footer.php"); ?>

?>