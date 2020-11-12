<?php
  include('codes/php/conexao.php');

  $link = mysqli_real_escape_string($conexao, $_POST['redirecionar']);
  $query = "SELECT * FROM artigo,usuario WHERE link = '$link' AND artigo.codUser = usuario.codUser";
  $con = $conexao->query($query) or die($conexao->error);
  while($dado = $con->fetch_array()) {
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="codes/css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title><?php echo $dado['titulo'];?></title>
  </head>
  <body>
    <header>
      <div id="languageSelection" align="right">
        <a href="index.html"><img src="img/brasil.png" width="25px"></a>
        <a href="mainPage.php"><img src="img/usa.png" width="25px"></a>
      </div>
      <a href="index.html"><img src="img/logo.png" height="100px"></a>
    </header>
    <nav>
      <div id="myAccount" align="right">
        <a href="paginaConta.php">Minha Conta</a>
      </div>
    </nav>
    <center id="center_artigo">
      <table>
        <tr>
          <td>Autor:</td>
          <td><?php echo $dado['nome'];?></td>
          <td>Graduação:</td>
          <td><?php echo $dado['grad']?></td>
        </tr>
        <tr>
          <td>Título:</td>
          <td><?php echo $dado['titulo'];?></td>
          <td>Data de Publicação:</td>
          <td><?php echo date("d/m/Y", strtotime($dado['dataPub']));?></td>
        </tr>
        <tr>
          <td colspan="4"><embed src="img/upload/<?php echo $dado['artigo']?>" width="1000" height="700" type='application/pdf'></td>
        </tr>
      </table>
    </center>
  </body>
</html>
<?php } ?>
