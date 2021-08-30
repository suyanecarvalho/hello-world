<?php
session_start();

if($_SESSION['acesso']!=1){
$_SESSION['loginErro']= "Acesso Inválido";
header ("Location: login.php");
}


$id_categoria = $_GET['id'];
//echo $id_categoria;
$select = mysql_query("SELECT * FROM categorias WHERE id_categoria = $id_categoria");
$categoria = mysql_fetch_assoc($select);
//var_dump($categoria);
?>

<center><h1>Editar Categoria</h1></center>

 <?php ?> 
<div class="container theme-showcase" role="main"> 
<div class="row">
<div class="col-md-12"> 
<div class="panel panel-default"> 
<div class="panel-body"> 


<form class="form-horizontal" method="POST" action="processa/proc_edit_categoria.php">
	
<input type="hidden" class="form-control" name="id_categoria" 
			placeholder="" value="<?php echo $categoria['id_categoria']?>" required>	
	    <div class="form-group">
        <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
			 <div class="col-sm-8">
			  <input type="text" class="form-control" name="nome" placeholder="" 
			  value="<?php echo $categoria['nome_categoria']?>" required autofocus>
		</div>
	 </div>



<input type="hidden" name="id" value="<?php echo $categoria['id']; ?>"> 
<div class="form-group"> 
<div class="col-sm-offset-2 col-sm-10"> 
<button type="submit" class="btn btn-info">Salvar</button> <a href='administrativo.php?link=7&id=<?php echo $categoria['id']; ?>'> 
<button type='button' class='btn btn-danger' >Cancelar</button></a> 
</div> </div> </form> </div> 
</div> </div> <!-- / container --> 

