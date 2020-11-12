<?php
  include('conexao.php');
  $dataMemb = date('Y/m/d');
  if (isset($_POST['enviar'])){
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $username = mysqli_real_escape_string($conexao, $_POST['username']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $dataNasc = mysqli_real_escape_string($conexao, $_POST['dataNasc']);
    $grad = mysqli_real_escape_string($conexao, $_POST['grad']);
    $estado = mysqli_real_escape_string($conexao, $_POST['estado']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $sql = "INSERT INTO usuario VALUES('','$nome','$username',md5('$senha'),'$dataNasc','$grad','$estado','$cidade','$dataMemb','')";
    $query = mysqli_query($conexao, $sql);
    if ($query){
      header("Location: ../../paginaCadastro.html");
    } else {
      echo "Erro: Dados não foram inseridos";
    }
  }
?>
