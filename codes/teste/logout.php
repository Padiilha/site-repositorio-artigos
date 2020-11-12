<?php
  session_start();
  session_destroy();
  header('Location: paginaCadastro.php');
  exit();
?>
