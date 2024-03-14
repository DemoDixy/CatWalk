<?php
    //Bloco de declaração de variaveis
    $nomeUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST["nomeUsuario"])){
            echo "<p>0 campo NOME é obrigatorio!</p>";
            $erroPreenchimento = true;
        } else{
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }

        if(empty($_POST["emailUsuario"])){
            echo "<p>0 campo EMAIL é obrigatorio!</p>";
            $erroPreenchimento = true;
        } else{
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }

        if(empty($_POST["senhaUsuario"])){
            echo "<p>0 campo SENHA é obrigatorio!</p>";
            $erroPreenchimento = true;
        } else{
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }

        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<p>0 campo CONFRIMAR SENHA é obrigatorio!</p>";
            $erroPreenchimento = true;
        } else{
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }

    }

   //Atribui ás variaveis PHP os valores recebidos pelo Array POST do formUsuario = ""/
    $nomeUsuario = $_POST["nomeUsuario"];
    $emaiUsuario = $_POST["emailUsuario"];
    $senhaUsuario = $_POST["senhaUsuario"];
    $confirmarSenhaUsuario = $_POST["confirmarSenhaUsuario"];

    if(!$erroPreenchimento){
        echo"
        <h3>Usuario cadastrado com sucesso!</h3>
         <table border='1'>
            <tr>
                <th>NOME:</th>
                <td>$nomeUsuario</td>
            
            </tr>
            <tr>
                <th>EMAIL:</th>
                <td>$emaiUsuario</td>
            
            </tr>
            <tr>
                <th>SENHA:</th>
                <td>$senhaUsuario</td>
            
            </tr>
            <tr>
                <th>CONFIRMAR SENHA:</th>
                <td>$confirmarSenhaUsuario</td>
            
            </tr>
    
        </table>";
    }

function filtarr_entrada($dado){

    $dado = trim($dado); //TRIM - Remove caracteres
    $dado = stripslashes
}

?>