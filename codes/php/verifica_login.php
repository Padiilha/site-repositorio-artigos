<?php
  session_start();
  if (!$_SESSION['username']) {
    header('Location: ../../paginaCadastro.html');
    exit();
  }
?>
