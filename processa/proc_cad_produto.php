<?php
include_once("../conexao.php");  //incluindo o banco de dados

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];

$insert= mysql_query("INSERT INTO produtos(nome_produto,categoria,quantidade,preco)
VALUES ('$nome','$categoria','$quantidade','$preco')");
echo'
	<script type="text/javascript">
		alert("Produto Cadastrado com Sucesso!");
		window.location = "../administrativo.php?link=5"
	</script>';


?>


