<?php
  include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Página Principal</title>
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
        <thead>
          <tr>
            <th width="175px">Título do Artigo</th>
            <th width="175px">Data de Publicação</th>
            <th width="175px">Autor</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i=0;
            $query = "SELECT * FROM artigo, usuario WHERE artigo.codUser = usuario.codUser";
            $con = $conexao->query($query) or die($conexao->error);
            $sql_query = "SELECT codArtigo FROM artigo";
            $result = mysqli_query($conexao, $sql_query);
            $row = mysqli_num_rows($result);
            while ($i < $row) {
              while($dado = $con->fetch_array()) {
                $titulo = $dado['titulo'];
                $dataPub = $dado['dataPub'];
                $nome = $dado['nome'];
                $link = $dado['link'];
                echo "
                  <form action="."artigo.php"." method="."post".">
                    <tr>
                      <td><center>$titulo</center></td>
                      <td><center>".date("d/m/Y", strtotime($dataPub))."</center></td>
                      <td><center>$nome</center></td>
                      <td><input type="."submit"." name="."redirecionar"." value="."$link"."></input></td>
                    </tr>
                  </form>
                ";
                $i = $i + 1;
              }
            }
          ?>
        </tbody>
      </table>
    </center>
  </body>
</html>
