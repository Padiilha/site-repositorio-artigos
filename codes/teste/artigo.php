<?php
  include('conexao.php');

  $link = mysqli_real_escape_string($conexao, $_POST['redirecionar']);
  $query = "SELECT * FROM artigo,usuario WHERE link = '$link' AND artigo.codUser = usuario.codUser";
  $con = $conexao->query($query) or die($conexao->error);
  while($dado = $con->fetch_array()) {
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title><?php echo $dado['titulo'];?></title>
  </head>
  <body>
    <header id="mainPage_header">
      <div id="languageSelection" align="right">
        <a href="paginaPrincipal.php"><img src="../img/brasil.png" width="25px"></a>
        <a href="mainPage.php"><img src="../img/usa.png" width="25px"></a>
      </div>
      <img src="../img/logo.png" height="100px">
      <div id="myAccount" align="right">
        <a href="paginaConta.php">Minha Conta</a>
      </div>
    </header>
    <nav id="mainPage_nav">
      <a href="paginaPrincipal.php">Página Principal</a>
    </nav>
    <center>
      <table>
        <tr>
          <td>Autor:</td>
          <td rowspan="4"><embed src="../img/upload/<?php echo $dado['artigo']?>" width="1000" height="750" type='application/pdf'></td>
          <td>Graduação:</td>
        </tr>
        <tr>
          <td><?php echo $dado['nome'];?></td>
          <td></td>
          <td><?php echo $dado['grad']?></td>
        </tr>
        <tr>
          <td>Título:</td>
          <td></td>
          <td>Data de Publicação:</td>
        </tr>
        <tr>
          <td><?php echo $dado['titulo'];?></td>
          <td></td>
          <td><?php echo date("d/m/Y", strtotime($dado['dataPub']));?></td>
        </tr>
      </table>
    </center>
  </body>
</html>
<?php } ?>
