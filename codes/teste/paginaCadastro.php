<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Página de Cadastro</title>
  </head>
  <body id="body_paginaCadastro">
    <header>
      <div id="languageSelection" align="right">
        <a href="paginaPrincipal.php"><img src="../img/brasil.png" width="25px"></a>
        <a href="mainPage.php"><img src="../img/usa.png" width="25px"></a>
      </div>
      <img src="../img/logo.png" height="100px">
    </header>
    <nav>
      <a href="paginaPrincipal.php">Voltar à página principal</a>
    </nav><aside id="asideLeft">
      <h3><center>Cadastre-se</center></h3>
      <form method="post" action="signUp.php">
        <center>
          <table>
            <tr>
              <td>Nome:</td>
              <td><input type="text" name="nome" value=""></td>
            </tr>
            <tr>
              <td>Usuário:</td>
              <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
              <td>Senha:</td>
              <td><input type="password" name="senha" value=""></td>
            </tr>
            <tr>
              <td>Data de nascimento:</td>
              <td><input type="date" name="dataNasc" value=""></td>
            </tr>
            <tr>
              <td>Graduação:</td>
              <td>
                <select name="grad">
						      <option>Ensino Fundamental</option>
						      <option>Ensino Médio</option>
						      <option>Ensino Superior</option>
              </td>
            </tr>
            <tr>
              <td>Estado:</td>
              <td>
                <select name="estado">
						      <option>AC</option>
						      <option>AL</option>
						      <option>AP</option>
  						    <option>AM</option>
	  					    <option>BA</option>
		  				    <option>CE</option>
			  			    <option>DF</option>
				  		    <option>ES</option>
					  	    <option>GO</option>
						      <option>MA</option>
						      <option>MT</option>
						      <option>MS</option>
  						    <option>MG</option>
	  					    <option>PA</option>
		  				    <option>PB</option>
			  			    <option>PR</option>
				  		    <option>PE</option>
						      <option>PI</option>
					  	    <option>RJ</option>
						      <option>RN</option>
						      <option>RS</option>
  						    <option>RO</option>
    						  <option>RR</option>
		  				    <option>SC</option>
			  			    <option>SP</option>
				  		    <option>SE</option>
					  	    <option>TO</option>
              </td>
            </tr>
            <tr>
              <td>Cidade:</td>
              <td><input type="text" name="cidade" value=""></td>
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
        </center>
      </form>
    </aside>
    <aside id="asideRight">
      <h3><center>Entre</center></h3>
      <form method="post" action="login.php">
        <center>
          <table>
            <tr>
              <td>Usuário:</td>
              <td><input type="text" name="username" value=""></td>
            </tr>
            <tr>
              <td>Senha:</td>
              <td><input type="password" name="senha" value=""></td>
            </tr>
            <tr>
              <td colspan="2">
                <center>
                  <input type="reset" name="limpar" value="Limpar">
                  <input type="submit" name="entrar" value="Entrar">
                </center>
              </td>
            </tr>
          </table>
        </center>
      </form>
    </aside>
  </body>
</html>
