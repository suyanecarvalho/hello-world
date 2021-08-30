<?php

$nome = $_POST['nome'];

//echo "<br>" .$nome;

include_once("../conexao.php");

$insert = mysql_query("INSERT INTO categorias(
nome_categoria)

VALUES('$nome')");

echo'
	<script type="text/javascript">
		alert("Categoria Cadastrada com Sucesso!");
		window.location = "../administrativo.php?link=8"
	</script>';
?>