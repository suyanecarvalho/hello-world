<?php

$id_categoria = $_GET['id_categoria'];

//echo "<br>" .$id_categoria;

include_once("../conexao.php");

$select = mysql_query("SELECT * FROM produtos WHERE categoria = $id_categoria");
$linhas_produtos= mysql_num_rows($select);
//echo "<br>".$linhas_produtos;

if ($linhas_produtos == 0 || $linhas_produtos==1){
	$delete = mysql_query("DELETE FROM categorias WHERE id_categoria = $id_categoria");
	
	echo'
	<script type="text/javascript">
		alert("Categoria excluída com sucesso!");
		window.location = "../administrativo.php?link=7"
	</script>';
	
}else{
	echo "<br>não pode excluir!";
	
	echo'
	<script type="text/javascript">
		alert("Erro! Categoria não pode ser excluída!");
		window.location = "../administrativo.php?link=7"
	</script>';
}

?>