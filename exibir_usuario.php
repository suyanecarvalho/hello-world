<?php
if($_SESSION['acesso']!=1){
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}
$id_usuario=$_GET['id'];  //pegou a id do URL
$select=mysql_query("SELECT * FROM usuarios WHERE id=$id_usuario");
$resultado=mysql_fetch_assoc($select);

?>

	<center> <h1> USUÁRIOS </h1></center>
	 <div class="container theme-showcase" role="main">
	 <div class="page-header">
	 </div>
	 <div class="row">
	 <table class="table table-striped">
	
	 <tbody>
	 <tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>ID:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['id']; ?>
					

						</div>
						
						</td>
					</tr>
					<tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>NOME:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['nome_usuario']; ?>
					

						</div>
						
						</td>
					</tr>

					<tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>USUÁRIO:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['usuario']; ?>
					

						</div>
						
						</td>
					</tr>
					<tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>EMAIL:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['email']; ?>
					

						</div>
						
						</td>
					</tr>
					<tr>
						<td>
						<div class="col-xs-3 col-sm-1 col-md-1">
							<b>SENHA:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php echo $resultado['senha']; ?>
					

						</div>
						
						</td>
					</tr>
					<tr>
						<td>
						<div class="col-xs-9 col-sm-11 col-md-11">
							<b>NIVEL DE ACESSO:</b>
						</div>
						<div class="col-xs-9 col-sm-11 col-md-11">
						<?php 
						 if($resultado['nivel_acesso_id']==1){
		echo"<td>Administrador</td>";
	}
	if($resultado['nivel_acesso_id']==2){
	echo"<td>Cliente</td>";
     }else	if($resultado['nivel_acesso_id']==3){		
		echo"<td>Usuário</td>";
	} 
	 ?> 				
	 </div>
						
						</td>
					</tr>
	  </tbody>
	  </table>
	  </div>
	  </div>
	  </div>