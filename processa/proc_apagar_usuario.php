<?php
include_once("../conexao.php");

$id_usuario=$_GET['id'];

$delete= mysql_query("DELETE FROM usuarios WHERE id=$id_usuario");

echo'
	<script type="text/javascript">
		alert("Usuário excluido com sucesso!");
		window.location = "../administrativo.php?link=1"
	</script>';
?>

		