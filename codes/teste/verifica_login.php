<?php
  session_start();
  if (!$_SESSION['username']) {
    header('Location: paginaCadastro.php');
    exit();
  }
?>
