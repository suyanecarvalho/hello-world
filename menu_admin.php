<?php

if($_SESSION['acesso'] !=1) {
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}


?>

<!-- Inicio navbar -->
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<style>
			a,
			a:hover{
				text-decoration: none;
				padding:5px;
				color:#fff;
			}
		</style>
			</head>
	
<body>

<nav class="navbar navbar-default" style="background-color: #f8af29;">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="administrativo.php?link=0">Painel do Administrador</a>
    </div>
	
		<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Usuários <span class="caret">
			  </span></a>
			  <ul class="dropdown-menu">
				<li><a href="administrativo.php?link=1">Listar</a></li>
				<li><a href="administrativo.php?link=2">Cadastrar</a></li>
				<li><a href="administrativo.php?link=3">Editar</a></li>
			  </ul>
			  <li class="dropdown">

			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Produtos <span class="caret">
			  </span></a>
			  <ul class="dropdown-menu">
				<li><a href="administrativo.php?link=4">Listar</a></li>
				<li><a href="administrativo.php?link=5">Cadastrar</a></li>
				<li><a href="administrativo.php?link=6">Editar</a></li>
			  </ul>
			  </li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
			  aria-haspopup="true" aria-expanded="false">Categoria <span class="caret">
			  </span></a>
			  <ul class="dropdown-menu">
				<li><a href="administrativo.php?link=7">Listar</a></li>
				<li><a href="administrativo.php?link=8">Cadastrar</a></li>
				<li><a href="administrativo.php?link=9">Editar</a></li>

			  </ul>
			  </li>
			  </ul>
			   <html>
			   <div align="right">
				<?php
					echo "Seja Bem Vindo: | ".$_SESSION['nome_usuario'];
				?>
			<a href="#" data-toggle="modal" data-target="#myModal"> Sair </a>
			</div>
</html>
	  
	  
  </div>
</nav>

</body>
</html>