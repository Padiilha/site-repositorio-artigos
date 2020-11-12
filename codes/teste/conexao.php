<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $banco = "projintegii";
    $conexao = mysqli_connect($server, $user, $password);
    if ($conexao) {
        $database = mysqli_select_db($conexao, $banco);
        if(!$database){
            echo "Banco MySql não existe";
            echo "<br>";
        }
        } else {
          echo "Não conectou";
          echo "<br>";
        }
?>
