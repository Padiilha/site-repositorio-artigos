<?php
  session_start();
  include('conexao.php');
  if(empty($_POST['username']) || empty($_POST['senha'])){
    header('Location: paginaCadastro.php');
    exit();
  }
  $username = mysqli_real_escape_string($conexao, $_POST['username']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
  $query = "SELECT codUser, username FROM usuario WHERE username = '{$username}' AND senha = md5('{$senha}')";
  $result = mysqli_query($conexao, $query);
  $row = mysqli_num_rows($result);
  if ($row == 1){
    $_SESSION['username'] = $username;
    header('Location: paginaConta.php');
    exit;
  } else {
    header('Location: paginaCadastro.php');
    exit();
  }
?>
