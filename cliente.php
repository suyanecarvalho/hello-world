<?php
session_start();

if($_SESSION['acesso'] !=2) {
	
$_SESSION['loginErro']= "Acesso Inválido";

header ("Location: login.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Sistema Web" content="Painel do Administrador">
    <meta name="Dream" content="Paulo Ricardo">
    <link rel="icon" href="imagens/favicon2.ico">
	<title> PAINEL DO CLIENTE </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<script src="js/jquery.min.js"> </script>-->
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
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button> <!--data-dismiss apenas tiraa janela de pergunta-->
          <a href="login.php"><button type="button" class="btn btn-primary">Sim</button></a>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal -->
  <?php
 include_once('menu_cliente.php');
  $link= $_GET["link"]; //ele vai pegar a informação da URL desse arquivo
  $pag[0]= "cliente.php";  //quando o link for 0 ele vai pro administrativo




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

