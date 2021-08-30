<?php

session_start();

if($_SESSION['acesso'] != 1){
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

?>

<center><h1>Cadastro de Categorias</h1></center>
<div class="container theme-showcase" role="main">
	   <div class="row">
	   <div class="col-md-12">
	   
	   <div class="panel panel-default">
			<div class="panel-body">
	   
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_categoria.php">
	<div class="form-group">
      <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
	  <div class="col-sm-5">
			<input type="text" class="form-control" name="nome" placeholder="" required autofocus>
		</div>
	    </div>
		
		
		<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-info">Salvar</button>
					<a href='administrativo.php?link=0'>
					<button type='button' class='btn btn-danger'>Cancelar</button>
						</a>
					</div>
				</div>
		
		</form>
		
		</div>
		</div>
		
		</div>	
	</div>
</div>