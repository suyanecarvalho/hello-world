<?php

if($_SESSION['acesso'] !=1) {
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}

?>
  
<div class="container theme-showcase" role="main"> 
<div class="page-header"> 
<h1>Cadastro de Usuários</h1> 
</div> 
<div class="row"> 
<div class="col-md-12"> 
<form class="form-horizontal" method="POST" action= 
"processa/proc_cad_usuario.php"> 

<div class="form-group">
<label for="inputNome" class="col-sm-2 control-label">Nome: </label> <div class="col-sm-4"> 
<input type="text" class="form-control" name="nome" placeholder="" 
required autofocus> 
</div> </div> 

<div class="form-group"> 
<label for="inputEmail" class="col-sm-2 control-label">Email:</label> <div class="col-sm-4"> 
<input type="email" class="form-control" name="email" placeholder="" 
required> </div> </div> 


<div class="form-group"> 
<label for="inputUsuario" class="col-sm-2 control-label">Usuário:</label> <div class="col-sm-4"> 
<input type="text" class="form-control" name=" usuario" placeholder="" 
required> </div> </div> 

<div class="form-group"> 
<label for="inputSenha" class="col-sm-2 control-label">Senha:</label> <div class="col-sm-4"> 
<input type="password" class="form-control" name="senha" placeholder="" 
required> </div> </div> 

<div class="form-group"> 
<label for="inputNivel" class="col-sm-2 control-label">Nível de Acesso: </label> 
<div class="col-sm-4"> 
<select class="form-control" name="nivel_acesso_id" required> 


<option>Selecione</option> 
<option value="1">Administrador</option> 
<option value="2">Cliente</option> 
<option value="3">Usuário</option> 

</select> </div> </div> 


<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10"> 
<button type="submit" class="btn btn-info">Salvar</button> 
<a href='administrativo.php?link=1&id=<?php echo $resultado ['id']; ?>'> 
<button type='button' class='btn btn-danger' >Cancelar</button></a> 
</div> 
</div>
 </form>
 </div> 
</div> 
</div> <!-- I container --> 


