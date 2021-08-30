<?php
include_once("../conexao.php");

$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco= $_POST['preco'];


$updade = mysql_query("UPDATE produtos set  
nome_produto= '$nome_produto', 
categoria = '$categoria',
quantidade = '$quantidade',
preco= '$preco'
WHERE id = '$id_produto'");

echo'
	<script type="text/javascript">
		alert("Produto Editado com Sucesso!");
		window.location = "../administrativo.php?link=6"
	</script>';

?>
		