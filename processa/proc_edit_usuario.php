<?php
include_once("../conexao.php");

$id_usuario = $_POST['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel_de_acesso = $_POST['nivel_de_acesso'];


$update = mysql_query("UPDATE usuarios set  
nome_usuario = '$nome_usuario', 
email = '$email',
usuario = '$usuario',
senha = '$senha',
nivel_acesso_id = '$nivel_de_acesso'
WHERE id = '$id_usuario'");

echo'
	<script type="text/javascript">
		alert("Usuário Editado com Sucesso!");
		window.location = "../administrativo.php?link=1"
	</script>';

?>