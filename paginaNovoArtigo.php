<?php
  include('codes/php/verifica_login.php');
  include('codes/php/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="codes/css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Novo Artigo</title>
  </head>
  <body id="body_paginaNovoArtigo">
    <header>
      <div id="languageSelection" align="right">
        <a href="paginaPrincipal.php"><img src="img/brasil.png" width="25px"></a>
        <a href="mainPage.php"><img src="img/usa.png" width="25px"></a>
      </div>
      <a href="paginaPrincipal.html"><img src="img/logo.png" height="100px"></a>
    </header>
    <nav>
      <div id="myAccount" align="right">
        <a href="paginaConta.php">Minha Conta</a>
      </div>
    </nav>
    <center>
      <form action="codes/php/addArtigo.php" method="post" enctype="multipart/form-data">
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
