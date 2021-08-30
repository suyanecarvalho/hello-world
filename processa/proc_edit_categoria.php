<?php

$id_categoria = $_POST['id_categoria'];
$nome_categoria = $_POST['nome'];

//var_dump($id_categoria);
//var_dump($nome_categoria);

include_once("../conexao.php");

$updade = mysql_query("UPDATE categorias set  nome_categoria = '$nome_categoria' WHERE id_categoria = '$id_categoria'");
	
echo'
<script type="text/javascript">
    alert("Categoria editada com sucesso!");
    window.location = "../administrativo.php?link=7"
</script>';



?>