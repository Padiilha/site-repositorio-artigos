<?php
  include('codes/php/verifica_login.php');
  include('codes/php/conexao.php');

  $username = $_SESSION['username'];
  if (isset($_POST['salvar'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novoNome = md5(time()).$extensao;
    $diretorio = "img/upload/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novoNome);
    $sql_code = "UPDATE usuario SET photo = '$novoNome' WHERE username = '$username'";
    $query = mysqli_query($conexao, $sql_code);
  }
  $query = "SELECT * FROM usuario WHERE username = '$username'";
  $con = $conexao->query($query) or die($conexao->error);
  while($dado = $con->fetch_array()) {
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="codes/css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Minha Conta</title>
  </head>
  <body>
    <header>
      <div id="languageSelection" align="right">
        <a href="paginaPrincipal.php"><img src="img/brasil.png" width="25px"></a>
        <a href="mainPage.php"><img src="img/usa.png" width="25px"></a>
      </div>
      <img src="img/logo.png" height="100px">
    </header>
    <nav>
      <center>
        <a href="paginaPrincipal.html">Página Principal</a>
        <a>|</a>
        <a href="paginaNovoArtigo.php">Novo Artigo</a>
      </center>
    </nav><center>
    <h2>Olá, <?php echo $username;?></h2>
    <form class="" action="paginaConta.php" method="post" enctype="multipart/form-data">
      Insira sua foto aqui: (.jpg/.png)
      <input type="file" required name="arquivo">
      <input type="submit" name="salvar" value="Salvar">
    </form>
      <table>
        <tr>
          <td rowspan="5" id="photo"><img src="img/upload/<?php echo $dado['photo'];?>" alt="" title="" width="200px" height="200px"></td>
          <td>Nome: </td>
          <td><?php echo $dado['nome'];?></td>
        </tr>
        <tr>
          <td>Data de Nascimento: </td>
          <td><?php echo date("d/m/Y", strtotime($dado['dataNasc']));?></td>
        </tr>
        <tr>
          <td>Membro(a) desde: </td>
          <td><?php echo date("d/m/Y", strtotime($dado['dataMemb']));?></td>
        </tr>
        <tr>
          <td>Usuário: </td>
          <td><?php echo $dado['username'];?></td>
        </tr>
        <tr>
          <td>Senha: </td>
          <td><?php echo $dado['senha'];?></td>
        </tr>
      </table>
    <?php } ?>
    <h2><a href="codes/php/logout.php" id="sair">Sair</a></h2>
  </center></body>
</html>
