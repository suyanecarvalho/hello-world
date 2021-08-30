<?php

$id_produto = $_GET['id'];

//echo "<br>" .$id_produto;

include_once("../conexao.php");

$delete = mysql_query("DELETE FROM produtos WHERE id = $id_produto");

echo'
	<script type="text/javascript">
		alert("Produto excluido com sucesso!");
		window.location = "../administrativo.php?link=4"
	</script>';
?>
