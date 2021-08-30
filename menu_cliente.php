<?php
if($_SESSION['acesso']!=2){
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}

?>

<!-- Inicio navbar -->
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    <style>
			a{
				text-decoration: none;
				padding:5px;
				color:#fff;
			}
		</style>	</head>
	
<body>
 
<nav class="navbar navbar-default" style="background-color: #f8af29;">
  <div class="container-fluid">
  
    <div class="navbar-header">
      <a class="navbar-brand" href="cliente.php?link=0">Painel do Cliente</a>
    </div>
	
<div align="right">
<?php
echo "Seja Bem Vindo: $_SESSION[nome_usuario] ";
?>
<a href="#" data-toggle="modal" data-target="#myModal">Sair</a>
	  </div>
</div>
</html>
	  
	  
  </div>
</nav>

 
</body>
</html>
	  