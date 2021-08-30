<?php

if(($_SESSION['acesso'] == 1) || ($_SESSION['acesso'] == 3)){

}else{
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

$id_categoria=$_GET['id'];  //pegou a id do URL
$select = mysql_query("SELECT * FROM categorias WHERE id_categoria = $id_categoria");
$resultado=mysql_fetch_assoc($select);
//var_dump($resultado);// mostra os valores do mysql_fetch_assoc.
?>

	<center> <h1> Categoria </h1></center>
	 <div class="container theme-showcase" role="main">
	 <div class="page-header">
	 </div>
	 <div class="row">
	 <div class="col-md-12"> <!--divisor que divide a linha row em 12 coluna-->
	 <table class="table table-striped">
	
	 <tbody>
	 <tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>ID:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['id_categoria']; ?>
					

						</div>
						
						</td>
					</tr>
					<tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>NOME:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['nome_categoria']; ?>
					

						</div>
						
						</td>
					</tr>
	  </tbody>
	  </table>
	  </div>
	  </div>
	  </div>