<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFChamp</title>
    <link rel="stylesheet" type="text/css" href="cssheader.css"> <!-- Verifique o caminho aqui -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        $(document).ready(function(){
            $("#telefoneUsuario").mask("(00) 00000-0000");
        });
    </script>

    <?php 
        $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : ''; 
    ?>
</head>
<body style="background-color: #0d2256;"> <!-- Alteração da cor de fundo aqui -->

    <!-- Container de Logotipo do Sistema -->
    <div class="container-fluid text-center">
        <a href="index.php" title="Retornar à Página Inicial">
            <img src="img/logoifchamp.png" width="300" alt="Logo do IFChamp">
        </a>
    </div>

    <!-- Barra de Navegação do Sistema -->
    <nav class="navbar navbar-expand-sm" style="background-color: #000235;"> <!-- Cor da navbar -->
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav me-auto"> <!-- Alinhamento à esquerda -->
                <li class="nav-item">
                    <a class="nav-link" style="color: #d3d3d3; <?php if($pagina=='index'){ echo 'color: white;'; } ?>" href="index.php?pagina=index" title="Ir para a Página Inicial">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #d3d3d3; <?php if($pagina=='formCampeonato'){ echo 'color: white;'; } ?>" href="formCampeonato.php?pagina=formCampeonato" title="Cadastrar Campeonato">Cadastrar Campeonato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #d3d3d3; <?php if($pagina=='formLogin'){ echo 'color: white;'; } ?>" href="formLogin.php?pagina=formLogin" title="Acessar o Sistema">Login</a>
                </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>