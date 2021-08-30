<?php

session_start();

if($_SESSION['acesso'] != 1){
	//Mensagem de erro	
	$_SESSION['loginErro'] = " Acesso inválido!";
	
	//Redireciona para página de login
	header("Location: login.php");
}

$id_usuario = $_GET['id'];
//echo $id_usuario;
$select = mysql_query("SELECT * FROM usuarios WHERE id = $id_usuario");
$usuario = mysql_fetch_assoc($select);
//var_dump($usuario);

?>

<center><h1>Editar Usuário</h1></center>
<div class="container theme-showcase" role="main">
	   <div class="row">
	   <div class="col-md-12">
	   
	   <div class="panel panel-default">
			<div class="panel-body">
	   
	  <form class="form-horizontal" method="POST" action="processa/proc_edit_usuario.php">
	  
	  <input type="hidden" class="form-control" name="id_usuario" 
		placeholder="" value="<?php echo $usuario['id']?>" required>
	  
	<div class="form-group">
      <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
	  <div class="col-sm-8">
			<input type="text" class="form-control" name="nome_usuario" placeholder="" value="<?php echo $usuario['nome_usuario']?>" required autofocus>
		</div>
	    </div>
		
		<div class="form-group">
      <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
	  <div class="col-sm-8">
			<input type="text" class="form-control" name="email" placeholder="" value="<?php echo $usuario['email']?>" required autofocus>
		</div>
	    </div>
		
			<div class="form-group">
      <label for="inputUsuario" class="col-sm-2 control-label">Usuário:</label>
	  <div class="col-sm-8">
			<input type="text" class="form-control" name="usuario" placeholder="" value="<?php echo $usuario['usuario']?>" required autofocus>
		</div>
	    </div>
		
		<div class="form-group">
      <label for="inputSenha" class="col-sm-2 control-label">Senha:</label>
	  <div class="col-sm-8">
			<input type="text" class="form-control" name="senha" placeholder="" value="<?php echo $usuario['senha']?>" required autofocus>
		</div>
	    </div>
		
		<div class="form-group">
				<label for="inputNiveldeAcesso" class="col-sm-2 control-label">Nível de Acesso:</label>
					<div class="col-sm-8">
					<select class="form-control" name="nivel_de_acesso" required>
					  <option></option>
					  <option value="1" 
					  <?php
						if ($usuario['nivel_acesso_id'] == 1) {
							echo 'selected';
						}
					  ?>
					  >Administrador</option>
					  <option value="2"
					  <?php
						if ($usuario['nivel_acesso_id'] == 2) {
							echo 'selected';
						}
					  ?>
					  >Cliente</option>
					  <option value="3"
					  <?php
						if ($usuario['nivel_acesso_id'] == 3) {
							echo 'selected';
						}
					  ?>
					  >Usuário</option>
					</select>
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