<?php
include_once("../conexao.php");  //incluindo o banco de dados

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel_acesso_id = $_POST['nivel_acesso_id'];

$insert= mysql_query("INSERT INTO usuarios(nome_usuario,usuario,email,senha,nivel_acesso_id)
VALUES ('$nome','$usuario','$email','$senha','$nivel_acesso_id')");
var_dump($insert);
echo'
	<script type="text/javascript">
		alert("Usuário Cadastrado com Sucesso!");
		window.location = "../administrativo.php?link=1"
	</script>';

?>


	