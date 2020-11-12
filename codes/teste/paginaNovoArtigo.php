<?php
  include('verifica_login.php');
  include('conexao.php');

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
    $diretorio_Artigo = "../img/upload/";
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
      header("Location: paginaArtigo.php");
    } else {
      echo "Erro: Dados não foram inseridos";
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Novo Artigo</title>
  </head>
  <body id="body_paginaNovoArtigo">
    <header>
      <div id="languageSelection" align="right">
        <a href="paginaPrincipal.php"><img src="../img/brasil.png" width="25px"></a>
        <a href="mainPage.php"><img src="../img/usa.png" width="25px"></a>
      </div>
      <a href="paginaPrincipal.php"><img src="../img/logo.png" height="100px"></a>
    </header>
    <nav>
      <div id="myAccount" align="right">
        <a href="paginaConta.php">Minha Conta</a>
      </div>
    </nav>
    <center>
      <form action="" method="post" enctype="multipart/form-data">
        <table id="table_paginaNovoArtigo">
          <tr>
            <td colspan="2"><center><h2>Novo Artigo</h2></center></td>
          </tr>
          <tr>
            <td>Título do Artigo:</td>
            <td><input type="text" name="titulo" value=""></td>
          </tr>
          <tr>
            <td>Adicione seu artigo aqui (.pdf):</td>
            <td><input type="file" required name="artigo"></td>
          </tr>
          <tr>
            <td colspan="2">
              <center>
                <input type="reset" name="limpar" value="Limpar">
                <input type="submit" name="enviar" value="Enviar">
              </center>
            </td>
          </tr>
        </table>
      </form>
    </center>
  </body>
</html>
