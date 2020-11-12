<?php
  include('../php/conexao.php');
  session_start();

  $dataPub = date('Y/m/d');
  $username = $_SESSION['username'];
  if (isset($_POST['enviar'])) {
    $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
    $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');
    $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
    $novoTitulo = strtolower(str_replace(' ','_',$titulo));
    $link = str_replace($comAcentos, $semAcentos, $novoTitulo);
    $extensao_Artigo = strtolower(substr($_FILES['artigo']['name'], -4));
    $novoNome_Artigo = md5(time()).$extensao_Artigo;
    $diretorio_Artigo = "../../img/upload/";
    move_uploaded_file($_FILES['artigo']['tmp_name'], $diretorio_Artigo.$novoNome_Artigo);
    $extensao_Img = strtolower(substr($_FILES['img']['name'], -4));
    $query = "SELECT codUser FROM usuario WHERE username = '$username'";
    $con = $conexao->query($query) or die($conexao->error);
    while($dado = $con->fetch_array()) {
      $codUser = $dado['codUser'];
    }
    $sql = "INSERT INTO artigo VALUES('','$titulo','$novoNome_Artigo','$dataPub','$link.php','$codUser')";
    $query = mysqli_query($conexao, $sql);
    if ($query){
      header("Location: ../../paginaArtigo.php");
    } else {
      echo "Erro: Dados não foram inseridos";
    }
  }
?>
