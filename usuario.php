<?php

session_start();

if($_SESSION['acesso'] != 3){
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

include_once('conexao.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Sistema Web" content="Painel do Usuário">
    <meta name="Multlav" content="Sara">
    <link rel="icon" href="imagens/favicon2.ico">
	<title>...::: PAINEL DO USUÁRIO :::...</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Atenção!</h4>
        </div>
        <div class="modal-body">
          <p>Tem certeza de que deseja sair do sistema?</p>
        </div>

<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
          <a href="login.php"><button type="button" class="btn btn-primary">Sim</button></a>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal -->
  <?php
	include_once("menu_usuario.php");
	
	$link = $_GET["link"];
	
	$pag[0] = "usuario.php";
	$pag[3] = "listar_produtos.php";
	$pag[5] = "listar_categorias.php";
	$pag[7] = "exibir_categoria.php";
	$pag[8] = "exibir_produto.php";
	
	
	if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}else{
				include "informativo.php";
			}
		}else{
				include "informativo.php";
		}
?>
</body>
</html>

