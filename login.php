<?php
	session_start();//inicia a sessão
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="pagina de acesso" content="Página de Acesso">
    <meta name="Dream Sistemas" content="lanchonete premiun">
    <link rel="icon" href="imagens/favicon2.ico">
    <title>Acesso ao Sistema</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	
  </head>
  
<!--estilo de background da página-->
  <style>
	.fundo{
		background-image: url(imagens/fundo.png);
		background-repeat: no-repeat;
		background-size: 100%;
	}
  </style>
<!-----------------------------> 

<!--conteúdo da página-->
  <body class="fundo">
	
		<?php
          unset ($_SESSION['acesso']); //destroi a variavel pra n ter acesso do lgin pro adm.
?>  
		<!-- container bootstrap -->
		<div class="container">
			
		  <!-- formulário de login -->
		  <form class="form-signin" method="POST" action="valida_login.php">  <!--POST= vai enviar pro valida atraves do POST-->
			<div align="center"><img src="imagens/logo1.png" alt="logo" width="260" height="250">
			</div>
			<br />
			<br />
			<div align="center"><img src="imagens/trava1.png" alt="logo" width="70" height="70">
			</div>
			<br />
			<br />
				<label for="inputEmail" class="sr-only">Usuário</label>
				<input type="text" name="usuario" class="form-control" placeholder="Usuário" required autofocus>
				
				<label for="inputPassword" class="sr-only">Senha</label>
				<input type="password" name="senha" class="form-control" placeholder="Senha" required>
				
				<button class="btn btn-warning btn-lg btn-block" type="submit">Entrar</button>
				
				<!-- RESPOSTA DO USUARIO OU SENHA INVALIDA -->
				<p>
					<?php
						if(isset($_SESSION['loginErro'])){ //verifica se a variável de sessão contém valores
							echo "<div class='alert alert-danger text-center' role='alert'>
							<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>"
							.$_SESSION['loginErro'].
							"</div>"; //caso sim, imprime a variável global
						unset ($_SESSION['loginErro']); //destrói a variável de sessão
						header('Refresh: 2; url=login.php');//atualiza a página depois de 3 segundos
						}
					?>
				</p>	
		  </form>
			
		</div> <!-- /container -->
  
  <div class="copyright text-center my-auto">
  <br>
	<span>Copyright &copy; <p>suyane carvalho</p><p>victoria dantas<p>sara dos santos<p>anderlandia alves
  </div>
  
  </body>
<!--------------------->
</html>